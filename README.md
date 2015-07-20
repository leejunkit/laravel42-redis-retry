Redis Retry
===============

A Laravel 4.2 package that implements a retry for Redis commands on connection errors.

## Installation

You can install the package using the [Composer](https://getcomposer.org/) package manager:

```json
{
    "require": {
        "leejunkit/laravel42-redis-retry": "dev-master"
    }
}
```

Update `app/config/app.php` with the new service provider.

```php
'providers' => array(
    ...
    //'Illuminate\Redis\RedisServiceProvider',
    'TwentyTwoMedia\Illuminate\Redis\RedisServiceProvider',
    ...
)
```