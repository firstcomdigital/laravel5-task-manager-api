## Task Manager API

Laravel 5 JSON API implementation for Task manager Web App.

response format:
* JSON API - [specs](http://jsonapi.org/format/)

uses:
* Laravel 5 - [specs](https://laravel.com/docs/5.3)
* Dingo API - [dingo/api](https://github.com/dingo/api)
* Codeception [codeception](http://codeception.com/)

## Installation

```bash
$ composer install
$ php artisan key:generate
$ cp .env.example .env
```

Fill in .env file

## Data

To create required database tables, update .env file with local database configuration and then run:
```bash
php artisan migrate
```

To populate the database with demo data run:
```bash
php artisan db:seed
```

To reseed, first recreate the tables by running:
```bash
php artisan migrate:refresh
```

## Dev

```bash
$ php artisan serve
```