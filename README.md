# Laravel Basic Project

Welcome to this Laravel project! This guide is designed for junior developers to understand how to get started with Laravel, run the application, and understand the project structure.

## Table of Contents
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
- [Running the Application](#running-the-application)
- [Database Setup & Migration](#database-setup--migration)
- [Laravel File Structure](#laravel-file-structure)
- [Common Commands](#common-commands)
- [Learning Resources](#learning-resources)

---

## Prerequisites

Before you begin, make sure you have the following installed on your system:

- **PHP** (version 8.1 or higher)
- **Composer** (PHP dependency manager)
- **MySQL** or **PostgreSQL** (or any other supported database)
- **Node.js & NPM** (for frontend asset compilation, optional)

---

## Getting Started

### 1. Clone the Repository
```bash
git clone <repository-url>
cd basic
```

### 2. Install Dependencies
Install all PHP dependencies using Composer:
```bash
composer install
```

### 3. Environment Configuration
Laravel uses a `.env` file for environment-specific configuration:

```bash
# Copy the example environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

**Important:** Open the `.env` file and configure your database settings:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3308
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

---

## Running the Application

### Start the Development Server

To run Laravel's built-in development server, use the following command:

```bash
php artisan serve
```

**What happens:**
- This starts a local development server at `http://127.0.0.1:8000` (or `http://localhost:8000`)
- The server will keep running until you stop it (press `Ctrl+C` to stop)
- You'll see output like: `INFO  Server running on [http://127.0.0.1:8000]`

**Options:**
```bash
# Run on a different port
php artisan serve --port=8080

# Run on a specific host
php artisan serve --host=0.0.0.0 --port=8000
```

Now open your browser and visit: `http://localhost:8000`

---

## Database Setup & Migration

### Step 1: Create Your Database
First, create a database using your database management tool:

**Using MySQL Command Line:**
```bash
mysql -u root -p
CREATE DATABASE your_database_name;
EXIT;
```

**Or use a GUI tool** like phpMyAdmin, MySQL Workbench, or TablePlus.

### Step 2: Configure Database Connection
Make sure your `.env` file has the correct database credentials (as shown in the Getting Started section).

### Step 3: Run Migrations

Migrations are like version control for your database. They allow you to define and share the database schema.

**To run all pending migrations:**
```bash
php artisan migrate
```

**What happens:**
- Laravel creates all the tables defined in the `database/migrations` folder
- It also creates a `migrations` table to track which migrations have been run
- You'll see output showing each migration being executed

**Common Migration Commands:**

```bash
# Run migrations
php artisan migrate

# Rollback the last batch of migrations
php artisan migrate:rollback

# Rollback all migrations
php artisan migrate:reset

# Rollback and re-run all migrations
php artisan migrate:refresh

# Drop all tables and re-run migrations
php artisan migrate:fresh

# Run migrations and seeders
php artisan migrate --seed
```

### Step 4: Seed the Database (Optional)

Seeders populate your database with sample data:

```bash
php artisan db:seed
```

---

## Laravel File Structure

Understanding the Laravel directory structure is crucial for efficient development. Here's a detailed breakdown:

```
basic/
├── app/                          # Core application code
│   ├── Console/                  # Artisan commands
│   │   └── Kernel.php           # Registers scheduled tasks & commands
│   ├── Exceptions/              # Exception handling
│   │   └── Handler.php          # Global exception handler
│   ├── Http/                    # HTTP layer
│   │   ├── Controllers/         # Controller classes (handle requests)
│   │   ├── Middleware/          # Request filters (authentication, CORS, etc.)
│   │   └── Kernel.php           # HTTP kernel (registers middleware)
│   ├── Models/                  # Eloquent models (database interactions)
│   │   └── User.php             # Example User model
│   └── Providers/               # Service providers (bootstrap application)
│       ├── AppServiceProvider.php
│       └── RouteServiceProvider.php
│
├── bootstrap/                    # Framework bootstrap files
│   ├── app.php                  # Application bootstrapping
│   └── cache/                   # Framework generated files (for optimization)
│
├── config/                       # Configuration files
│   ├── app.php                  # Application configuration
│   ├── database.php             # Database configuration
│   ├── auth.php                 # Authentication configuration
│   ├── cache.php                # Cache configuration
│   └── ...                      # Many more config files
│
├── database/                     # Database related files
│   ├── factories/               # Model factories (for testing/seeding)
│   ├── migrations/              # Database migrations (schema definitions)
│   │   └── 2014_10_12_000000_create_users_table.php
│   └── seeders/                 # Database seeders (sample data)
│       └── DatabaseSeeder.php
│
├── public/                       # Publicly accessible files
│   ├── index.php                # Entry point for all requests
│   ├── .htaccess                # Apache server configuration
│   ├── css/                     # Compiled CSS files
│   ├── js/                      # Compiled JavaScript files
│   └── images/                  # Public images
│
├── resources/                    # Raw, un-compiled assets
│   ├── css/                     # Raw CSS/SASS files
│   ├── js/                      # Raw JavaScript files
│   ├── views/                   # Blade templates (HTML views)
│   │   └── welcome.blade.php    # Default welcome page
│   └── lang/                    # Language files (translations)
│
├── routes/                       # Route definitions
│   ├── web.php                  # Web routes (with session, CSRF protection)
│   ├── api.php                  # API routes (stateless)
│   ├── console.php              # Console/Artisan commands
│   └── channels.php             # Broadcast channels
│
├── storage/                      # Application storage
│   ├── app/                     # Application generated files
│   │   ├── public/              # User uploaded files (symlinked to public/storage)
│   ├── framework/               # Framework generated files (cache, sessions)
│   │   ├── cache/
│   │   ├── sessions/
│   │   └── views/               # Compiled Blade templates
│   └── logs/                    # Application logs
│       └── laravel.log
│
├── tests/                        # Automated tests
│   ├── Feature/                 # Feature tests (test entire features)
│   └── Unit/                    # Unit tests (test individual components)
│
├── vendor/                       # Composer dependencies (don't modify)
│
├── .env                         # Environment variables (not in git)
├── .env.example                 # Example environment file (template)
├── .gitignore                   # Git ignore file
├── artisan                      # Artisan command-line tool
├── composer.json                # PHP dependencies
├── composer.lock                # Locked PHP dependency versions
├── package.json                 # Node.js dependencies
└── phpunit.xml                  # PHPUnit testing configuration
```

### Key Directories Explained

#### **`app/`** - Your Application Code
This is where you'll spend most of your time. It contains:
- **Models**: Represent database tables and handle data
- **Controllers**: Handle HTTP requests and return responses
- **Middleware**: Filter HTTP requests (e.g., check if user is logged in)

#### **`routes/`** - URL Definitions
Define which URLs map to which controllers/actions:
```php
// Example in routes/web.php
Route::get('/users', [UserController::class, 'index']);
```

#### **`database/migrations/`** - Database Schema
Define your database structure in PHP code:
```php
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamps();
});
```

#### **`resources/views/`** - HTML Templates
Blade templates for your frontend:
```blade
<h1>Welcome {{ $name }}</h1>
```

#### **`config/`** - Configuration Files
All configuration is centralized here. Values often reference `.env` file:
```php
'name' => env('APP_NAME', 'Laravel'),
```

#### **`public/`** - Web Server Root
The only publicly accessible directory. All requests go through `public/index.php`.

#### **`storage/`** - Generated Files & Logs
Laravel stores cache, sessions, uploaded files, and logs here.

#### **`vendor/`** - Third-Party Packages
Contains all Composer packages. Never modify directly—use `composer.json` instead.

---

## Understanding the `.env` File

The `.env` file is the heart of your Laravel application's configuration. It stores environment-specific settings that should not be committed to version control (like passwords and API keys). Let's explore the most important configuration options:

### Application Settings

#### **APP_NAME**
```env
APP_NAME=Laravel
```
- **Purpose**: The name of your application
- **Usage**: Used in email notifications, page titles, and UI elements
- **Example**: `APP_NAME="My Awesome App"`
- **Note**: Use quotes if the name contains spaces

#### **APP_ENV**
```env
APP_ENV=local
```
- **Purpose**: Defines the environment your application is running in
- **Common Values**:
  - `local` - Development on your local machine
  - `development` - Development server
  - `staging` - Pre-production testing
  - `production` - Live production server
- **Impact**: Affects error reporting and debugging features

#### **APP_KEY**
```env
APP_KEY=base64:randomgeneratedkeyhere...
```
- **Purpose**: Encryption key for securing session data and encrypted values
- **Generation**: Run `php artisan key:generate` to create it
- **Warning**: ⚠️ Never share this key! Changing it will invalidate all encrypted data

#### **APP_DEBUG**
```env
APP_DEBUG=true
```
- **Purpose**: Controls whether detailed error messages are displayed
- **Values**:
  - `true` - Show detailed error pages (development only!)
  - `false` - Show generic error pages (production)
- **Warning**: ⚠️ Always set to `false` in production to avoid exposing sensitive information

#### **APP_URL**
```env
APP_URL=http://localhost
```
- **Purpose**: The base URL of your application
- **Usage**: Used for generating URLs in emails, notifications, and asset links
- **Examples**:
  - Development: `http://localhost` or `http://localhost:8000`
  - Custom port: `http://localhost:8080`
  - Production: `https://myapp.com`

---

### Database Configuration

These settings connect your Laravel application to your database:

#### **DB_CONNECTION**
```env
DB_CONNECTION=mysql
```
- **Purpose**: Database driver to use
- **Supported Values**: `mysql`, `pgsql` (PostgreSQL), `sqlite`, `sqlsrv` (SQL Server)
- **Note**: Must match your installed database system

#### **DB_HOST**
```env
DB_HOST=127.0.0.1
```
- **Purpose**: Database server address
- **Common Values**:
  - `127.0.0.1` or `localhost` - Local database
  - Remote IP address for external databases
  - Cloud database hostname (e.g., AWS RDS endpoint)

#### **DB_PORT**
```env
DB_PORT=3308
```
- **Purpose**: Port number for database connection
- **Default Ports**:
  - MySQL: `3306`
  - PostgreSQL: `5432`
  - SQL Server: `1433`
- **Note**: The example uses `3308`, which might be for MAMP/XAMPP or custom MySQL installation

#### **DB_DATABASE**
```env
DB_DATABASE=your_database_name
```
- **Purpose**: Name of your database
- **Example**: `DB_DATABASE=laravel_app`
- **Note**: This database must exist before running migrations

#### **DB_USERNAME**
```env
DB_USERNAME=your_database_user
```
- **Purpose**: Database user with access permissions
- **Common Values**:
  - Development: `root` (MySQL), `postgres` (PostgreSQL)
  - Production: Use a dedicated user with limited permissions

#### **DB_PASSWORD**
```env
DB_PASSWORD=your_database_password
```
- **Purpose**: Password for the database user
- **Development**: Often empty for local `root` user
- **Production**: ⚠️ Always use strong passwords
- **Note**: Use quotes if password contains special characters: `DB_PASSWORD="p@ssw0rd!"`

---

### Mail Configuration

Configure how your application sends emails:

#### **MAIL_MAILER**
```env
MAIL_MAILER=log
```
- **Purpose**: Email delivery method
- **Common Values**:
  - `log` - Save emails to log file (development/testing)
  - `smtp` - Send via SMTP server
  - `sendmail` - Use sendmail
  - `mailgun` - Use Mailgun service
  - `ses` - Amazon SES
  - `postmark` - Postmark service

#### **MAIL_HOST**
```env
MAIL_HOST=127.0.0.1
```
- **Purpose**: SMTP server hostname
- **Examples**:
  - Gmail: `smtp.gmail.com`
  - Mailgun: `smtp.mailgun.org`
  - SendGrid: `smtp.sendgrid.net`
  - Mailtrap (testing): `smtp.mailtrap.io`

#### **MAIL_PORT**
```env
MAIL_PORT=2525
```
- **Purpose**: SMTP server port
- **Common Ports**:
  - `587` - TLS (recommended)
  - `465` - SSL
  - `25` - Non-encrypted (not recommended)
  - `2525` - Alternative port (Mailtrap, etc.)

#### **MAIL_USERNAME & MAIL_PASSWORD**
```env
MAIL_USERNAME=null
MAIL_PASSWORD=null
```
- **Purpose**: SMTP server authentication credentials
- **Note**: Required when using SMTP services

#### **MAIL_ENCRYPTION**
```env
MAIL_ENCRYPTION=tls
```
- **Purpose**: Email encryption method
- **Values**: `tls`, `ssl`, or `null`
- **Recommendation**: Use `tls` for better security

#### **MAIL_FROM_ADDRESS & MAIL_FROM_NAME**
```env
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```
- **Purpose**: Default sender information for outgoing emails
- **Note**: `${APP_NAME}` references the APP_NAME variable
- **Example**:
  ```env
  MAIL_FROM_ADDRESS="noreply@myapp.com"
  MAIL_FROM_NAME="My Awesome App"
  ```

---

### Other Important Settings

#### **Session & Cache**
```env
SESSION_DRIVER=database
SESSION_LIFETIME=120
CACHE_STORE=database
```
- **SESSION_DRIVER**: Where to store user sessions (`file`, `cookie`, `database`, `redis`)
- **SESSION_LIFETIME**: Session timeout in minutes
- **CACHE_STORE**: Where to store cached data

#### **Queue**
```env
QUEUE_CONNECTION=database
```
- **Purpose**: How to handle background jobs
- **Values**: `sync`, `database`, `redis`, `sqs`

#### **Logging**
```env
LOG_CHANNEL=stack
LOG_LEVEL=debug
```
- **LOG_CHANNEL**: Where to write logs
- **LOG_LEVEL**: Minimum severity to log (`debug`, `info`, `warning`, `error`)

---

### Quick Reference: Common .env Configurations

#### **Development Setup**
```env
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3308
DB_DATABASE=my_app
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=log
```

#### **Production Setup**
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://myapp.com

DB_CONNECTION=mysql
DB_HOST=production-db-host.com
DB_PORT=3306
DB_DATABASE=production_db
DB_USERNAME=prod_user
DB_PASSWORD=strong_secure_password

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
```

---

### Important Tips

> [!IMPORTANT]
> - Never commit the `.env` file to version control (it's in `.gitignore`)
> - Always use `.env.example` as a template for team members
> - Run `php artisan config:cache` in production to improve performance
> - Run `php artisan config:clear` after changing `.env` values

> [!WARNING]
> - Changing `APP_KEY` will invalidate all encrypted data and user sessions
> - Always set `APP_DEBUG=false` in production
> - Use strong passwords for database and email credentials
> - Keep your `.env` file secure with proper file permissions

> [!TIP]
> - Use quotes for values with spaces: `APP_NAME="My App"`
> - Reference other variables: `MAIL_FROM_NAME="${APP_NAME}"`
> - Use `env()` helper in config files: `env('APP_NAME', 'Laravel')`
> - The second parameter in `env()` is the default value if the variable is not set

---

## Understanding the `public/` Folder

The `public/` directory is one of the most critical folders in your Laravel application. It's the **only folder accessible from the web browser**, making it the entry point for all HTTP requests and the storage location for publicly accessible assets.

### Why the Public Folder is Special

#### **Document Root / Web Server Entry Point**
- When you deploy Laravel, you should point your web server's document root to the `public/` directory
- This means visitors can **only** access files inside `public/`, keeping your application code secure
- All other Laravel directories (`app/`, `config/`, `database/`, etc.) are **not web-accessible**, protecting sensitive code and configuration

#### **Front Controller Pattern**
All HTTP requests are routed through `public/index.php`, which:
1. Loads the Composer autoloader
2. Bootstraps the Laravel application
3. Handles the request through Laravel's routing system
4. Returns the appropriate response

---

### Public Folder Structure

```
public/
├── index.php              # Application entry point (front controller)
├── .htaccess             # Apache web server configuration
├── robots.txt            # Search engine crawling instructions
├── favicon.ico           # Website favicon
├── css/                  # Compiled CSS files (generated by build tools)
├── js/                   # Compiled JavaScript files (generated by build tools)
├── images/               # Public images (logos, icons, etc.)
├── fonts/                # Web fonts
├── storage/              # Symlink to storage/app/public (user uploads)
└── build/                # Vite build assets (if using Vite)
```

---

### Key Files Explained

#### **`index.php` - The Front Controller**
```php
<?php
// This is the entry point for all requests
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
```

**What it does:**
- Receives all HTTP requests first
- Bootstraps the Laravel framework
- Routes requests to appropriate controllers
- You should **never** modify this file unless you have a very specific reason

#### **`.htaccess` - Apache Configuration**
```apache
RewriteEngine On
RewriteRule ^(.*)$ index.php [QSA,L]
```

**What it does:**
- Redirects all requests to `index.php`
- Enables "pretty URLs" (e.g., `/users` instead of `/index.php/users`)
- Only applies if using Apache web server
- For Nginx, configuration is done in the server config file

#### **`robots.txt` - Search Engine Control**
```txt
User-agent: *
Disallow:
```

**What it does:**
- Tells search engine crawlers which pages to index
- By default, allows all pages to be crawled
- Customize for production (e.g., block admin pages)

#### **`favicon.ico` - Website Icon**
- Small icon displayed in browser tabs and bookmarks
- Replace with your own favicon for branding

---

### What Goes in the Public Folder?

#### ✅ **DO Store in Public:**

**1. Compiled Assets (CSS & JavaScript)**
```
public/css/app.css          # Compiled by Laravel Mix or Vite
public/js/app.js            # Bundled JavaScript
public/build/               # Vite build output
```

**2. Static Images**
```
public/images/logo.png      # Company logo
public/images/banner.jpg    # Marketing banners
public/icons/               # Icon files
```

**3. Public Documents**
```
public/docs/manual.pdf      # Public user manuals
public/downloads/           # Downloadable files
```

**4. Web Fonts**
```
public/fonts/Inter.woff2    # Custom web fonts
```

**5. Third-Party Libraries (if not using npm)**
```
public/vendor/bootstrap/    # Bootstrap CSS/JS
public/vendor/jquery/       # jQuery library
```

#### ❌ **DO NOT Store in Public:**

**1. Sensitive Files**
- `.env` file (environment variables)
- Configuration files
- Database credentials
- API keys

**2. Application Code**
- Controllers, Models, Views (Blade templates)
- PHP classes
- Migration files

**3. User Uploaded Files (with private access)**
- Profile pictures (use `storage/app/public` + symlink)
- Private documents
- User-generated content that needs access control

---

### Working with Assets in Public Folder

#### **Referencing Public Assets in Blade Templates**

Laravel provides the `asset()` helper to generate URLs for public assets:

```blade
<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- JavaScript Files -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- Images -->
<img src="{{ asset('images/logo.png') }}" alt="Logo">

<!-- Downloads -->
<a href="{{ asset('docs/manual.pdf') }}" download>Download Manual</a>
```

**Why use `asset()` instead of hardcoding paths?**
- Automatically includes the correct domain (useful for CDNs)
- Respects `APP_URL` in your `.env` file
- Works correctly in subdirectories

#### **Using Versioned Assets (Cache Busting)**

```blade
<!-- Mix versioning (Laravel Mix) -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}"></script>

<!-- Vite versioning -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

**Benefits:**
- Automatically appends version hash to URLs
- Forces browser to reload updated files
- Prevents caching issues after deployments

---

### Storage Symlink: Bridging Private and Public Storage

Laravel stores user uploads in `storage/app/public/` (private), but you need a way to access them from the web.

#### **Creating the Symbolic Link**

Run this command to create a symlink:
```bash
php artisan storage:link
```

**What it does:**
```
Creates: public/storage → storage/app/public
```

#### **After Running storage:link**

```
public/
└── storage/              # Symlink to storage/app/public
    └── avatars/
        └── user1.jpg
```

**Accessing symlinked files:**
```blade
<!-- Store file in storage/app/public/avatars/user1.jpg -->
<img src="{{ asset('storage/avatars/user1.jpg') }}" alt="Avatar">
```

#### **Why Use This Approach?**

✅ **Advantages:**
- User uploads are stored outside `public/` initially
- Easy to move files to cloud storage (S3, etc.) later
- Better organization and security
- Can add access control through Laravel before serving files

---

### Security Best Practices

> [!WARNING]
> **Critical Security Rules for the Public Folder**

1. **Never store sensitive files**
   - No `.env` files, database backups, or credentials
   - Laravel's `.gitignore` helps prevent this

2. **Validate uploaded files**
   - Always validate file types and sizes
   - Use Laravel's validation rules: `'file' => 'required|image|max:2048'`

3. **Set correct permissions**
   ```bash
   # Files should be readable but not executable
   chmod 644 public/index.php
   chmod 755 public/
   ```

4. **Disable directory listing**
   - `.htaccess` already prevents this for Apache
   - For Nginx, add `autoindex off;` in server config

5. **Use HTTPS in production**
   - Always serve assets over HTTPS
   - Update `APP_URL` in `.env` to use `https://`

> [!TIP]
> **Performance Tips for Public Assets**
> 
> - **Enable compression**: Gzip/Brotli for CSS, JS files
> - **Use CDN**: Serve static assets from a CDN for faster loading
> - **Optimize images**: Compress images before uploading
> - **Cache headers**: Set long expiration times for static assets
> - **Minify assets**: Use Laravel Mix or Vite to minify CSS/JS

---

### Common Public Folder Tasks

#### **Adding a Custom Favicon**
1. Create/obtain your `favicon.ico` file
2. Replace `public/favicon.ico`
3. Clear browser cache to see changes

#### **Adding Custom Images**
```bash
# Create images directory
mkdir -p public/images

# Copy your image
cp ~/mylogo.png public/images/logo.png
```

```blade
<!-- Use in Blade -->
<img src="{{ asset('images/logo.png') }}" alt="Company Logo">
```

#### **Adding Third-Party Libraries**
```bash
# Option 1: Use npm (recommended)
npm install bootstrap
npm run build

# Option 2: Manual download to public
mkdir -p public/vendor/bootstrap
# Copy files to public/vendor/bootstrap
```

#### **Serving PDF Documents**
```bash
# Create docs directory
mkdir -p public/docs

# Add PDF file
cp ~/user-guide.pdf public/docs/
```

```blade
<!-- Link to PDF -->
<a href="{{ asset('docs/user-guide.pdf') }}" target="_blank">
    View User Guide
</a>
```

---

### Production Deployment

When deploying to production, configure your web server to point to the `public/` directory:

#### **Apache Virtual Host**
```apache
<VirtualHost *:80>
    ServerName example.com
    DocumentRoot /var/www/laravel/public

    <Directory /var/www/laravel/public>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

#### **Nginx Configuration**
```nginx
server {
    listen 80;
    server_name example.com;
    root /var/www/laravel/public;

    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

---

### Quick Reference

| File/Folder | Purpose | Web Accessible? |
|-------------|---------|-----------------|
| `public/index.php` | Application entry point | Yes (but routes through Laravel) |
| `public/css/` | Compiled CSS files | Yes |
| `public/js/` | Compiled JavaScript files | Yes |
| `public/images/` | Static images | Yes |
| `public/storage/` | Symlink to user uploads | Yes (after running `storage:link`) |
| `public/.htaccess` | Apache configuration | Yes (but not executed) |
| `app/`, `config/`, etc. | Application code | **No** (secure) |
| `storage/app/private/` | Private files | **No** (secure) |

---

## Deep Dive: Laravel Folder Structure

Now that you understand the `.env` file and `public/` folder, let's explore each Laravel folder in detail. Understanding what goes where is crucial for building organized and maintainable applications.

---

### 📁 `app/` - Your Application Code

This is where you'll spend most of your development time. It contains all your application-specific code.

#### **Directory Structure**
```
app/
├── Console/              # Artisan commands
├── Exceptions/           # Exception handling
├── Http/                 # HTTP layer (controllers, middleware)
├── Models/               # Eloquent models (database)
├── Providers/            # Service providers
└── ...                   # Other custom directories
```

#### **`app/Console/` - Custom Artisan Commands**
```
app/Console/
├── Commands/             # Your custom commands
│   └── SendEmails.php   # Example: php artisan emails:send
└── Kernel.php           # Command registration and scheduling
```

**Use cases:**
- Create custom commands: `php artisan make:command SendEmails`
- Schedule tasks in `Kernel.php`:
  ```php
  protected function schedule(Schedule $schedule)
  {
      $schedule->command('emails:send')->daily();
  }
  ```

#### **`app/Exceptions/` - Error Handling**
```
app/Exceptions/
└── Handler.php          # Global exception handler
```

**What you can do:**
- Customize error responses
- Log specific exceptions
- Send error notifications
- Render custom error pages

**Example:**
```php
public function render($request, Throwable $exception)
{
    if ($exception instanceof CustomException) {
        return response()->json(['error' => 'Custom error'], 500);
    }
    return parent::render($request, $exception);
}
```

#### **`app/Http/` - HTTP Request/Response Logic**
```
app/Http/
├── Controllers/         # Handle requests and return responses
│   └── UserController.php
├── Middleware/          # Filter HTTP requests
│   └── Authenticate.php
├── Requests/            # Form request validation
│   └── StoreUserRequest.php
└── Kernel.php          # HTTP middleware registration
```

**Controllers** - Handle application logic:
```bash
# Create a controller
php artisan make:controller UserController

# Create a resource controller (CRUD)
php artisan make:controller PostController --resource
```

**Middleware** - Filter requests:
```bash
# Create middleware
php artisan make:middleware CheckAge

# Apply to routes
Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth');
```

**Form Requests** - Validate incoming data:
```bash
php artisan make:request StoreUserRequest
```

#### **`app/Models/` - Database Models (Eloquent ORM)**
```
app/Models/
├── User.php             # User model
├── Post.php             # Post model
└── Comment.php          # Comment model
```

**What models do:**
- Represent database tables
- Define relationships between tables
- Handle database queries elegantly

**Creating models:**
```bash
# Create a model
php artisan make:model Post

# Create model with migration
php artisan make:model Post -m

# Create model with migration, factory, and seeder
php artisan make:model Post -mfs
```

**Example usage:**
```php
// Fetch all users
$users = User::all();

// Find specific user
$user = User::find(1);

// Create new user
User::create([
    'name' => 'John Doe',
    'email' => 'john@example.com'
]);
```

#### **`app/Providers/` - Service Providers**
```
app/Providers/
├── AppServiceProvider.php      # General application bindings
├── AuthServiceProvider.php     # Authentication policies
├── EventServiceProvider.php    # Event listeners
└── RouteServiceProvider.php    # Route configuration
```

**What they do:**
- Bootstrap application services
- Register bindings in the service container
- Configure packages and services

**Common use:**
```php
// In AppServiceProvider.php
public function boot()
{
    // Force HTTPS in production
    if (config('app.env') === 'production') {
        URL::forceScheme('https');
    }
}
```

---

### 📁 `bootstrap/` - Framework Bootstrap

```
bootstrap/
├── app.php              # Creates Laravel application instance
├── providers.php        # Registers service providers
└── cache/               # Framework optimization files
```

**Purpose:**
- Bootstraps the Laravel framework
- Contains cached configuration and route files

**When you interact with it:**
- Almost never! This is framework internals
- Cache files are generated automatically

**Related commands:**
```bash
# Clear bootstrap cache
php artisan optimize:clear

# Create optimized files (production)
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

### 📁 `config/` - Configuration Files

```
config/
├── app.php              # Application configuration
├── auth.php             # Authentication settings
├── cache.php            # Cache configuration
├── database.php         # Database connections
├── mail.php             # Email configuration
├── queue.php            # Queue configuration
├── services.php         # Third-party service credentials
└── ...                  # 20+ configuration files
```

**Key configuration files:**

#### **`config/app.php`**
```php
'name' => env('APP_NAME', 'Laravel'),
'env' => env('APP_ENV', 'production'),
'debug' => env('APP_DEBUG', false),
'url' => env('APP_URL', 'http://localhost'),
'timezone' => 'UTC',
'locale' => 'en',
```

#### **`config/database.php`**
```php
'default' => env('DB_CONNECTION', 'mysql'),
'connections' => [
    'mysql' => [
        'host' => env('DB_HOST', '127.0.0.1'),
        'database' => env('DB_DATABASE', 'forge'),
        // ...
    ],
],
```

#### **`config/mail.php`**
```php
'default' => env('MAIL_MAILER', 'smtp'),
'from' => [
    'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
    'name' => env('MAIL_FROM_NAME', 'Example'),
],
```

**Usage in code:**
```php
// Access config values
$appName = config('app.name');
$timezone = config('app.timezone');

// Set config values at runtime
config(['app.locale' => 'es']);
```

**Best practices:**
- Never hardcode values - use `env()` in config files
- Access config using `config()` helper, not `env()`
- Cache config in production for better performance

---

### 📁 `database/` - Database Related Files

```
database/
├── factories/           # Model factories (generate fake data)
│   └── UserFactory.php
├── migrations/          # Database schema versions
│   └── 2024_01_01_000000_create_users_table.php
└── seeders/             # Database seeders (populate data)
    └── DatabaseSeeder.php
```

#### **`database/migrations/` - Database Schema**

**What are migrations?**
- Version control for your database
- Define table structure in PHP code
- Easy to roll back changes

**Creating migrations:**
```bash
# Create a migration
php artisan make:migration create_posts_table

# Create migration for existing table
php artisan make:migration add_status_to_posts_table
```

**Example migration:**
```php
public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->foreignId('user_id')->constrained();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('posts');
}
```

#### **`database/factories/` - Generate Test Data**

**Purpose:**
- Create fake data for testing
- Populate database for development

**Creating factories:**
```bash
php artisan make:factory PostFactory
```

**Example factory:**
```php
public function definition()
{
    return [
        'title' => $this->faker->sentence(),
        'content' => $this->faker->paragraph(),
        'user_id' => User::factory(),
    ];
}
```

**Using factories:**
```php
// Create one user
$user = User::factory()->create();

// Create 10 users
User::factory()->count(10)->create();

// Create users with specific attributes
User::factory()->create(['name' => 'John Doe']);
```

#### **`database/seeders/` - Populate Database**

**Purpose:**
- Fill database with initial data
- Create default users, settings, etc.

**Creating seeders:**
```bash
php artisan make:seeder PostSeeder
```

**Example seeder:**
```php
public function run()
{
    User::factory()->count(50)->create();
    
    Post::create([
        'title' => 'First Post',
        'content' => 'Hello World',
    ]);
}
```

**Running seeders:**
```bash
# Run all seeders
php artisan db:seed

# Run specific seeder
php artisan db:seed --class=PostSeeder

# Migrate and seed in one command
php artisan migrate:fresh --seed
```

---

### 📁 `resources/` - Frontend Assets & Views

```
resources/
├── css/                 # Raw CSS/SASS files
│   └── app.css
├── js/                  # Raw JavaScript files
│   └── app.js
├── views/               # Blade templates
│   └── welcome.blade.php
└── lang/                # Translation files
    └── en/
```

#### **`resources/views/` - Blade Templates**

**What is Blade?**
- Laravel's templating engine
- Mix PHP with HTML elegantly
- Template inheritance and components

**Creating views:**
```bash
# Create a view manually
touch resources/views/posts/index.blade.php
```

**Directory structure:**
```
resources/views/
├── layouts/
│   └── app.blade.php        # Main layout
├── posts/
│   ├── index.blade.php      # List posts
│   ├── show.blade.php       # Show single post
│   └── create.blade.php     # Create post form
└── components/
    └── alert.blade.php      # Reusable component
```

**Example Blade template:**
```blade
@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    
    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
@endsection
```

**Returning views from controllers:**
```php
return view('posts.index', ['posts' => $posts]);
```

#### **`resources/css/` & `resources/js/` - Frontend Assets**

**What goes here:**
- Raw CSS/SASS/SCSS files
- Raw JavaScript files (not compiled)
- Files that need to be processed by Vite or Laravel Mix

**Example:**
```
resources/
├── css/
│   ├── app.css          # Main CSS file
│   └── admin.css        # Admin-specific CSS
└── js/
    ├── app.js           # Main JavaScript
    └── components/      # Vue/React components
```

**Building assets:**
```bash
# Development mode (watch for changes)
npm run dev

# Production mode (minified)
npm run build
```

**Output goes to:** `public/build/` (Vite) or `public/css/`, `public/js/` (Mix)

#### **`resources/lang/` - Translations**

**Purpose:**
- Multi-language support
- Centralize text strings

**Structure:**
```
resources/lang/
├── en/
│   ├── messages.php
│   └── validation.php
└── es/
    ├── messages.php
    └── validation.php
```

**Usage:**
```php
// In code
echo __('messages.welcome');

// In Blade
{{ __('messages.welcome') }}
```

---

### 📁 `routes/` - Application Routes

```
routes/
├── web.php              # Web routes (with sessions, CSRF)
├── api.php              # API routes (stateless)
├── console.php          # Console commands
└── channels.php         # Broadcast channels
```

#### **`routes/web.php` - Web Routes**

**For:**
- Regular web pages
- Forms with CSRF protection
- Session-based authentication

**Example:**
```php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);

// Route groups
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('posts', PostController::class);
});
```

#### **`routes/api.php` - API Routes**

**For:**
- RESTful APIs
- Mobile app backends
- Stateless requests

**Automatically prefixed with `/api`:**
```php
// Accessible at: /api/users
Route::get('/users', [UserController::class, 'index']);

// API resource
Route::apiResource('posts', PostController::class);
```

#### **Route Types:**
```php
// Basic routes
Route::get('/path', $callback);
Route::post('/path', $callback);
Route::put('/path', $callback);
Route::delete('/path', $callback);

// Multiple methods
Route::match(['get', 'post'], '/path', $callback);
Route::any('/path', $callback);

// Route parameters
Route::get('/user/{id}', function ($id) {
    return "User: " . $id;
});

// Named routes
Route::get('/profile', [ProfileController::class, 'show'])
    ->name('profile');

// Generate URL: route('profile')
```

---

### 📁 `storage/` - Generated Files & Logs

```
storage/
├── app/                 # Application-generated files
│   ├── public/          # User uploads (symlink to public/storage)
│   └── private/         # Private files
├── framework/           # Framework files (cache, sessions, views)
│   ├── cache/
│   ├── sessions/
│   └── views/
└── logs/                # Application logs
    └── laravel.log
```

#### **`storage/app/` - Application Files**

**`storage/app/public/`** - Publicly accessible files:
```bash
# Create symlink
php artisan storage:link

# Now accessible at: public/storage/
```

**Store files:**
```php
use Illuminate\Support\Facades\Storage;

// Store file
Storage::disk('public')->put('avatars/user1.jpg', $fileContents);

// Retrieve file
$file = Storage::disk('public')->get('avatars/user1.jpg');

// Delete file
Storage::disk('public')->delete('avatars/user1.jpg');
```

**`storage/app/private/`** - Private files (not web-accessible):
```php
// Store private file
Storage::put('private/document.pdf', $fileContents);

// User must be authenticated to download
```

#### **`storage/framework/` - Framework Generated**

**Do NOT modify manually!**
- `cache/` - Application cache
- `sessions/` - Session storage
- `views/` - Compiled Blade templates

#### **`storage/logs/` - Application Logs**

**What's logged:**
- Errors and exceptions
- Debug information
- Custom log messages

**View logs:**
```bash
# Tail the log file
tail -f storage/logs/laravel.log
```

**Custom logging:**
```php
use Illuminate\Support\Facades\Log;

Log::info('User logged in', ['user_id' => $user->id]);
Log::warning('Low disk space');
Log::error('Payment failed', ['order_id' => $order->id]);
```

**Permissions:**
```bash
# Ensure storage is writable
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

---

### 📁 `tests/` - Automated Tests

```
tests/
├── Feature/             # Feature tests (test workflows)
│   └── ExampleTest.php
└── Unit/                # Unit tests (test individual functions)
    └── ExampleTest.php
```

#### **Feature Tests** - Test Complete Features
```bash
# Create feature test
php artisan make:test UserTest
```

**Example:**
```php
public function test_user_can_view_posts()
{
    $response = $this->get('/posts');
    $response->assertStatus(200);
    $response->assertSee('Posts');
}
```

#### **Unit Tests** - Test Individual Methods
```bash
# Create unit test
php artisan make:test UserTest --unit
```

**Example:**
```php
public function test_user_has_name()
{
    $user = new User(['name' => 'John']);
    $this->assertEquals('John', $user->name);
}
```

#### **Running Tests**
```bash
# Run all tests
php artisan test

# Or using PHPUnit
./vendor/bin/phpunit

# Run specific test
php artisan test --filter test_user_can_view_posts
```

---

### 📁 `vendor/` - Composer Dependencies

```
vendor/
├── laravel/           # Laravel framework
├── symfony/           # Symfony components
├── guzzlehttp/        # HTTP client
└── ...                # All Composer packages
```

**Important rules:**
- ❌ **NEVER modify files in vendor/**
- ❌ **Do NOT commit vendor/ to Git** (use `.gitignore`)
- ✅ **Always use `composer.json` to manage dependencies**

**Managing dependencies:**
```bash
# Install all dependencies
composer install

# Add new package
composer require guzzlehttp/guzzle

# Remove package
composer remove package/name

# Update all packages
composer update
```

---

### 📊 Quick Reference: Folder Usage Summary

| Folder | What Goes Here | You Modify? | Web Accessible? |
|--------|----------------|-------------|-----------------|
| `app/` | Controllers, Models, Business Logic | ✅ Always | ❌ No |
| `bootstrap/` | Framework bootstrap | ❌ Rarely | ❌ No |
| `config/` | Configuration files | ✅ Often | ❌ No |
| `database/` | Migrations, Seeders, Factories | ✅ Always | ❌ No |
| `public/` | Assets, Entry point | ✅ Often | ✅ Yes |
| `resources/` | Views, Raw CSS/JS | ✅ Always | ❌ No |
| `routes/` | Route definitions | ✅ Always | ❌ No |
| `storage/` | Logs, Cache, Uploads | ⚠️ Via Code | ❌ No (except symlink) |
| `tests/` | Test files | ✅ Often | ❌ No |
| `vendor/` | Composer packages | ❌ Never | ❌ No |

---

### 💡 Best Practices

> [!TIP]
> **Organization Tips**
> 
> - **Controllers**: Keep them thin, move logic to services or models
> - **Models**: Use for database interactions and relationships
> - **Views**: Keep logic minimal, use directives like `@if`, `@foreach`
> - **Routes**: Group related routes, use route names for easier maintenance
> - **Config**: Use `.env` for environment-specific values, config files for structure

> [!IMPORTANT]
> **Common Mistakes to Avoid**
> 
> - Don't put business logic in controllers (use services or models)
> - Don't hardcode values (use config files and `.env`)
> - Don't modify `vendor/` folder
> - Don't store sensitive files in `public/`
> - Don't forget to run migrations after pulling changes

> [!WARNING]
> **Security Considerations**
> 
> - Only `public/` folder should be web-accessible in production
> - Keep `.env` file out of version control
> - Validate all user inputs in controllers or form requests
> - Use Laravel's built-in authentication (don't roll your own)
> - Regularly update dependencies with `composer update`

---

## Common Commands

### Artisan Commands
Artisan is Laravel's command-line tool. Run `php artisan` to see all available commands.

```bash
# View all artisan commands
php artisan list

# Create a new controller
php artisan make:controller UserController

# Create a new model
php artisan make:model Post

# Create a model with migration
php artisan make:model Post -m

# Create a migration
php artisan make:migration create_posts_table

# Create a seeder
php artisan make:seeder PostSeeder

# Clear application cache
php artisan cache:clear

# Clear configuration cache
php artisan config:clear

# Clear route cache
php artisan route:clear

# Clear view cache
php artisan view:clear

# Create a symbolic link for storage
php artisan storage:link

# Run the application
php artisan serve

# View all routes
php artisan route:list
```

### Composer Commands
```bash
# Install dependencies
composer install

# Update dependencies
composer update

# Add a new package
composer require package-name

# Remove a package
composer remove package-name

# Dump autoload files
composer dump-autoload
```

---

## Learning Resources

### Official Documentation
- [Laravel Documentation](https://laravel.com/docs) - Comprehensive official docs
- [Laravel API Reference](https://laravel.com/api/10.x/) - Detailed API documentation

### Video Tutorials
- [Laracasts](https://laracasts.com) - Premium Laravel screencasts
- [Laravel Daily](https://laraveldaily.com) - Free Laravel tutorials

### Community
- [Laravel News](https://laravel-news.com) - Latest Laravel news and packages
- [Laracasts Forum](https://laracasts.com/discuss) - Community discussion
- [Laravel Discord](https://discord.gg/laravel) - Real-time chat

---

## Troubleshooting

### Common Issues

**Port already in use:**
```bash
php artisan serve --port=8001
```

**Permission denied on storage/logs:**
```bash
chmod -R 775 storage bootstrap/cache
```

**Class not found after creating new files:**
```bash
composer dump-autoload
```

**Database connection refused:**
- Check if your database server is running
- Verify credentials in `.env` file
- Make sure the database exists

---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. It provides:
- Simple, fast routing engine
- Powerful dependency injection container
- Multiple back-ends for session and cache storage
- Expressive, intuitive database ORM (Eloquent)
- Database agnostic schema migrations
- Robust background job processing
- Real-time event broadcasting

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
