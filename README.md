# Laravel POS Foundations

This project implements IT0049 TFA5: a four-page Laravel POS application.

## Requirements

- PHP 8.2+
- Composer
- SQLite

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

On Windows PowerShell, use `Copy-Item .env.example .env` instead of `cp`.

## Pages

- `/` - landing page
- `/about` - application information
- `/customers` - customer accounts
- `/users` - user accounts

Customer and user records are stored in SQLite and retrieved through Eloquent models. The schema is defined in `database/migrations`, and five sample records for each table are loaded by `database/seeders/PosSeeder.php`.

## TFA6 database reset

For a clean local database with sample records:

```bash
php artisan migrate:fresh --seed
```
