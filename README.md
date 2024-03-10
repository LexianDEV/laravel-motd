# Display MOTD messages to your users.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lexiandev/laravel-motd.svg?style=flat-square)](https://packagist.org/packages/lexiandev/laravel-motd)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/lexiandev/laravel-motd/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/lexiandev/laravel-motd/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/lexiandev/laravel-motd/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/lexiandev/laravel-motd/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lexiandev/laravel-motd.svg?style=flat-square)](https://packagist.org/packages/lexiandev/laravel-motd)

This is a simple package to display MOTD messages to your users, it can
be used to display updates, maintenance messages, or any other message
you want to display to your users.

When using the package, simply call the `get` method on the motd model
and it'll return the **newest** message that is not expired.

## Installation

You can install the package via composer:

```bash
composer require lexiandev/laravel-motd
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="motd-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="motd-config"
```

This is the contents of the published config file:

```php
return [
    /**
     * The default text that will be displayed if no MOTD is set.
     * Default: Null; no message will be returned.
     */
    'default_message' => null,
];
```

## Usage

```php
$motd = new Motd();
return $motd->get();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing
    
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lexian-droid](https://github.com/lexiandev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
