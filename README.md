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

Customer and user records are temporary static PHP arrays in their controllers, as required by the activity. The standard migration and seeder files are retained in `database/` for repository submission.
