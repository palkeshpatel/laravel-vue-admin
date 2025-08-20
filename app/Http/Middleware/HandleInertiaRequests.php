<?php

namespace App\Http\Middleware;

use Inertia\Middleware;
use Laravolt\Avatar\Avatar;
use App\Models\SystemNotice;
use Illuminate\Http\Request;
use App\Models\Personalisation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $personalisation = Personalisation::first() ?? new Personalisation();

        // Generate avatar with error handling
        $avatar = null;
        if ($request->user()) {
            try {
                $avatarInstance = new Avatar(config('laravolt.avatar'));
                $avatar = $avatarInstance
                    ->create($request->user()->name)
                    ->setTheme('pastel')
                    ->setFontSize(48)
                    ->setDimension(100, 100)
                    ->toBase64();
            } catch (\Exception $e) {
                // Log the error but don't break the application
                Log::warning('Avatar generation failed: ' . $e->getMessage());
                $avatar = null;
            }
        }

        return array_merge(
            parent::share($request),
            [
                'auth' => [
                    'user' => $request->user() ? [
                        'name' => $request->user()->name,
                        'roles' => $request->user()->roles->pluck('name'),
                        'avatar' => $avatar,
                    ] : null,
                ],

                'csrf_token' => csrf_token(),

                'flash' => [
                    'message' => fn() => $request->session()->get('message'),
                    'success' => fn() => $request->session()->get('success'),
                    'error' => fn() => $request->session()->get('error'),
                    'status' => fn() => $request->session()->get('status'),
                    'warning' => fn() => $request->session()->get('warning'),
                    'info' => fn() => $request->session()->get('info'),
                    'danger' => fn() => $request->session()->get('danger'),
                    'recovery-codes-generated' => fn() => $request->session()->get('recovery-codes-generated'),
                    'two-factor-authentication-enabled' => fn() => $request->session()->get('two-factor-authentication-enabled'),
                    'two-factor-authentication-disabled' => fn() => $request->session()->get('two-factor-authentication-disabled'),
                    'verification-link-sent' => fn() => $request->session()->get('verification-link-sent'),
                    'profile-information-updated' => fn() => $request->session()->get('profile-information-updated'),
                ],

                'personalisation' => [
                    'app_name' => $personalisation->app_name,
                    'app_logo' => $personalisation->app_logo ? Storage::url($personalisation->app_logo) : null,
                    'app_logo_dark' => $personalisation->app_logo_dark ? Storage::url($personalisation->app_logo_dark) : null,
                    'favicon' => $personalisation->favicon ? Storage::url($personalisation->favicon) : null,
                    'footer_text' => $personalisation->footer_text,
                    'copyright_text' => $personalisation->copyright_text,
                ],

                'settings' => [
                    'passwordlessLogin' => DB::table('settings')->value('passwordless_login') ?? true,
                ],

                'systemNotices' => SystemNotice::query()
                    ->where('is_active', true)
                    ->where(function ($query) {
                        $query->whereNull('visible_from')
                            ->orWhere('visible_from', '<=', now());
                    })
                    ->where(function ($query) {
                        $query->whereNull('expires_at')
                            ->orWhere('expires_at', '>', now());
                    })
                    ->orderBy('created_at', 'desc')
                    ->get(),
            ],
        );
    }
}