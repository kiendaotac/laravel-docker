# Initialize simple docker development environment for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kiendaotac/laravel-docker.svg?style=flat-square)](https://packagist.org/packages/kiendaotac/laravel-docker)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kiendaotac/laravel-docker/run-tests?label=tests)](https://github.com/kiendaotac/laravel-docker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/kiendaotac/laravel-docker/Check%20&%20fix%20styling?label=code%20style)](https://github.com/kiendaotac/laravel-docker/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kiendaotac/laravel-docker.svg?style=flat-square)](https://packagist.org/packages/kiendaotac/laravel-docker)

## Support us

## Installation

You can install the package via composer:

```bash
composer require kiendaotac/laravel-docker --dev
```

You can publish the config file with:
```bash
php artisan vendor:publish --tag="laravel-docker_without_prefix-config"
```

## Usage

```php
php artisan laravel-docker:install
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Hoàng Văn Kiên](https://github.com/kiendaotac)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
