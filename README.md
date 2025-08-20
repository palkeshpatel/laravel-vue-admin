# Laravel Vue Admin - Modern Admin Dashboard Starter Kit

[![Laravel](https://img.shields.io/badge/Laravel-v12.x-FF2D20?style=flat&logo=laravel)](https://laravel.com)
[![Vue.js](https://img.shields.io/badge/Vue.js-v3.x-4FC08D?style=flat&logo=vue.js)](https://vuejs.org)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-v4.x-06B6D4?style=flat&logo=tailwind-css)](https://tailwindcss.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/license/MIT)
[![Stars](https://img.shields.io/github/stars/palkesh/laravel-vue-admin?style=social)](https://github.com/palkesh/laravel-vue-admin)
[![Forks](https://img.shields.io/github/forks/palkesh/laravel-vue-admin?style=social)](https://github.com/palkesh/laravel-vue-admin)

<div align="center">
  <h3>🚀 A Modern Laravel 12 + Vue 3 Admin Dashboard with Advanced Features</h3>
  <p>Build powerful admin panels, dashboards, and web applications with this comprehensive starter kit</p>
</div>

## ✨ Features

### 🔐 **Authentication & Security**

-   **Laravel Fortify Integration** - Secure authentication system
-   **Magic Link Authentication** - Passwordless login experience
-   **Two-Factor Authentication (2FA)** - Enhanced security with TOTP
-   **Role-Based Access Control** - Advanced permissions with Spatie Laravel Permission
-   **Session Management** - Active sessions tracking and management
-   **Login History** - Comprehensive audit trail of user activities
-   **Password Policies** - Configurable password requirements and expiry

### 🎨 **Modern UI/UX**

-   **Dark/Light Mode** - Automatic system preference detection
-   **Responsive Design** - Mobile-first approach with Tailwind CSS v4
-   **Auto-Generated Avatars** - Beautiful user avatars with Laravel Avatar
-   **Google Fonts Integration** - Optimized typography with local fonts
-   **Customizable Themes** - Personalization options for users
-   **Modern Components** - Reusable Vue 3 components with TypeScript support

### 📊 **Data Visualization & Tables**

-   **Interactive Charts** - ApexCharts v4 integration for beautiful data visualization
    -   Line, Area, Bar, and Donut charts
    -   Responsive and mobile-friendly
    -   Export capabilities (PNG, SVG, PDF)
-   **Advanced Data Tables** - TanStack Table v8 with server-side operations
    -   Server-side pagination and sorting
    -   Global and column-specific search
    -   Bulk actions and row selection
    -   Excel/CSV export functionality

### 📁 **File Management**

-   **Drag & Drop Uploads** - FilePond v4 integration
    -   Image preview and optimization
    -   File type validation
    -   Size restrictions and progress tracking
    -   Multiple file selection support

### 🔄 **System Administration**

-   **Backup Management** - Automated backups with Spatie Laravel Backup
    -   One-click backup creation
    -   Cloud storage integration
    -   Backup monitoring and notifications
-   **Activity Auditing** - Laravel Auditing for complete change tracking
    -   User action logging
    -   Data modification history
    -   Compliance-ready audit trails
-   **Health Monitoring** - System health checks and status monitoring
-   **System Notices** - Admin announcements and notifications

### 🔍 **Search & Analytics**

-   **Typesense Integration** - Fast, typo-tolerant search
-   **Algolia Search** - Alternative search provider support
-   **Analytics Dashboard** - Built-in metrics and KPIs
-   **Financial Metrics** - Revenue and business analytics

## 🛠️ Technology Stack

### Backend

-   **Laravel 12** - Latest PHP framework with modern features
-   **PHP 8.2+** - Latest PHP with performance improvements
-   **MySQL/PostgreSQL** - Robust database support
-   **Redis** - Caching and session storage
-   **Queue System** - Background job processing

### Frontend

-   **Vue 3** - Progressive JavaScript framework
-   **Inertia.js** - Modern monolith approach
-   **Tailwind CSS v4** - Utility-first CSS framework
-   **TypeScript** - Type-safe JavaScript development
-   **Vite** - Fast build tool and dev server

### Key Packages

-   **Spatie Laravel Permission** - Role and permission management
-   **Laravel Fortify** - Authentication scaffolding
-   **Laravel Auditing** - Model change tracking
-   **Spatie Laravel Backup** - Automated backup system
-   **ApexCharts** - Interactive chart library
-   **TanStack Table** - Powerful data table component
-   **FilePond** - File upload component

## 🚀 Quick Start

### Prerequisites

-   **PHP >= 8.2** with required extensions
-   **Node.js >= 18** and NPM
-   **Composer** for PHP dependencies
-   **MySQL/PostgreSQL** database
-   **Redis** (optional, for caching)

### Installation

1. **Clone the repository**

```bash
git clone https://github.com/palkesh/laravel-vue-admin.git
cd laravel-vue-admin
```

2. **Install PHP dependencies**

```bash
composer install
```

3. **Install Node.js dependencies**

```bash
npm install
```

4. **Environment setup**

```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure database in `.env`**

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_vue_admin
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. **Run migrations and seeders**

```bash
php artisan migrate
php artisan db:seed
```

7. **Build assets and start development**

```bash
npm run dev
php artisan serve
```

**🎉 Success!** Visit `http://localhost:8000` to see your admin dashboard.

### Default Login Credentials

-   **Email:** `admin@example.com`
-   **Password:** `password`

## 📁 Project Structure

```
laravel-vue-admin/
├── app/
│   ├── Http/Controllers/     # Laravel controllers
│   ├── Models/              # Eloquent models
│   ├── Policies/            # Authorization policies
│   └── Traits/              # Reusable traits
├── resources/
│   ├── js/
│   │   ├── Components/      # Vue components
│   │   ├── Layouts/         # Page layouts
│   │   ├── Pages/           # Inertia pages
│   │   └── utils/           # Utility functions
│   └── views/               # Blade templates
├── routes/                  # Application routes
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/             # Database seeders
└── config/                  # Configuration files
```

## 🎯 Use Cases

This starter kit is perfect for building:

-   **Admin Dashboards** - Business intelligence and analytics
-   **SaaS Applications** - Multi-tenant admin panels
-   **E-commerce Platforms** - Product and order management
-   **Content Management Systems** - User and content administration
-   **CRM Systems** - Customer relationship management
-   **Project Management Tools** - Team and task administration
-   **Financial Applications** - Transaction and reporting systems

## 🔧 Customization

### Adding New Features

1. Create new Vue components in `resources/js/Components/`
2. Add routes in `routes/web.php`
3. Create controllers in `app/Http/Controllers/`
4. Add database migrations for new features

### Theming

-   Customize colors in `tailwind.config.js`
-   Modify component styles in `resources/css/`
-   Update theme variables in `resources/js/utils/themeInit.js`

### Authentication

-   Configure Fortify in `config/fortify.php`
-   Customize authentication views
-   Add custom authentication logic

## 📚 Documentation

### Official Documentation

-   [Laravel 12 Documentation](https://laravel.com/docs/12.x)
-   [Vue 3 Documentation](https://vuejs.org/guide/)
-   [Inertia.js Documentation](https://inertiajs.com/)
-   [Tailwind CSS v4 Documentation](https://tailwindcss.com/docs)

### Package Documentation

-   [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission)
-   [Laravel Fortify](https://laravel.com/docs/fortify)
-   [ApexCharts](https://apexcharts.com/docs/)
-   [TanStack Table](https://tanstack.com/table/v8)
-   [FilePond](https://pqina.nl/filepond/)

## 🤝 Contributing

We welcome contributions! Please see our [Contributing Guide](CONTRIBUTING.md) for details.

### Development Setup

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests for new features
5. Submit a pull request

## 🐛 Support

-   **Issues:** [GitHub Issues](https://github.com/palkesh/laravel-vue-admin/issues)
-   **Discussions:** [GitHub Discussions](https://github.com/palkesh/laravel-vue-admin/discussions)
-   **Email:** patel.palkesh@gmail.com

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

-   [Laravel Team](https://laravel.com) for the amazing framework
-   [Vue.js Team](https://vuejs.org) for the progressive framework
-   [Tailwind CSS](https://tailwindcss.com) for the utility-first CSS framework
-   [Spatie](https://spatie.be) for excellent Laravel packages
-   All contributors who help improve this project

## ⭐ Star History

[![Star History Chart](https://api.star-history.com/svg?repos=palkesh/laravel-vue-admin&type=Date)](https://star-history.com/#palkesh/laravel-vue-admin&Date)

---

<div align="center">
  <p>Made with ❤️ by <a href="mailto:patel.palkesh@gmail.com">Palkesh Patel</a></p>
  <p>If this project helps you, please give it a ⭐ on GitHub!</p>
</div>
