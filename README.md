# Laravel POS Foundations

This project implements IT0049 TFA5 and TFA6: a four-page Laravel POS application using Laravel MVC, SQLite, migrations, seeders, Eloquent models, and Blade views.

## Requirements

- PHP 8.2+
- Composer
- SQLite

## Setup on Windows PowerShell

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Open the application at `http://127.0.0.1:8000`.

## Pages

- `/` - landing page
- `/about` - application information
- `/customers` - customer accounts
- `/users` - user accounts

## TFA6 implementation

- `app/Models/Customer.php` defines the Customer Eloquent model.
- `app/Models/User.php` defines the User Eloquent model.
- `database/migrations/2026_10_27_000000_create_customers_table.php` creates the customers table with `full_name`, `email`, and `phone`.
- `database/migrations/0001_01_01_000000_create_users_table.php` creates the users table with a unique `username` and `full_name`.
- `database/seeders/PosSeeder.php` inserts five customers and five users.
- `CustomerController` and `UserController` retrieve records through Eloquent instead of static arrays.
- The customer and user Blade views display database records while preserving the CasaForma-style UI.

## TFA6 database reset

For a clean local SQLite database with the TFA6 sample records:

```powershell
php artisan migrate:fresh --seed
```

## Verification commands

```powershell
php artisan migrate:status
php artisan route:list
php artisan view:cache
php artisan test
```

## GitHub submission

The repository contains the raw Laravel project files, migrations, seeders, models, controllers, Blade views, and README. Do not commit `.env`; use `.env.example` for setup.
