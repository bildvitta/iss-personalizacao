# This is my package iss-personalizacao

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bildvitta/iss-personalizacao.svg?style=flat-square)](https://packagist.org/packages/bildvitta/iss-personalizacao)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bildvitta/iss-personalizacao/run-tests?label=tests)](https://github.com/bildvitta/iss-personalizacao/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bildvitta/iss-personalizacao/Check%20&%20fix%20styling?label=code%20style)](https://github.com/bildvitta/iss-personalizacao/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bildvitta/iss-personalizacao.svg?style=flat-square)](https://packagist.org/packages/bildvitta/iss-personalizacao)

## Installation

You can install the package via composer:

```bash
composer require bildvitta/iss-personalizacao
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="iss-personalizacao-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="iss-personalizacao-config"
```

This is the contents of the published config file:

```php
return [
    'base_uri' => env('MS_PERSONALIZACAO_BASE_URI', 'https://api-dev-personalizacao.nave.dev'),
    'prefix' => env('MS_PERSONALIZACAO_API_PREFIX', '/api'),
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="iss-personalizacao-views"
```

## Usage

```php
$issPersonalizacao = new Bildvitta\IssPersonalizacao();
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

- [Michael](https://github.com/bildvitta)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
