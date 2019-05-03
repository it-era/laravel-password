# IT-era / LaravelPassword

## Installation

```sh
composer require it-era/laravel-password
```

Add the provider to your config/app.php
```php
    'providers' => [
        // ...
        ITera\LaravelPassword\Providers\LaravelServiceProvider::class,
        // ...
    ]
```

## List of commands

### make:password

Returns a hashed password.

Usage : 
```sh
php artisan make:password {password?}
```

If password is not set, start a prompt asking for a password to encrypt