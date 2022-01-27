# Laravel IRSFA

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cdvedia/irsfa.svg?style=flat-square)](https://packagist.org/packages/cdvedia/irsfa)
[![Total Downloads](https://img.shields.io/packagist/dt/cdvedia/irsfa.svg?style=flat-square)](https://packagist.org/packages/cdvedia/irsfa)
![GitHub Actions](https://github.com/cdvedia/irsfa/actions/workflows/main.yml/badge.svg)


This package support IRSFA API for Laravel 8 version. Please reffer to this site https://aksaradata.id/ for more information.

## Documentation
For the API documentation, check [Irsfa Api Developer](https://developer.irsfa.id/documentation/?php#introductions)

## Installation

You can install the package via composer:

```bash
composer require cdvedia/irsfa
```

## Configuration
To get started, you'll need to publish vendor assets for Irsfa.
```bash
php artisan vendor:publish --provider=Cdvedia\Irsfa\IrsfaServiceProvider
```
This will create the `config/irsfa.php` file in your app, modify it to set your configuration.

## Usage
### Via Facade
If you prefer the classic Laravel facade style, this might be the way to go, for example:

```php
use Cdvedia\Irsfa\Facades\Irsfa;
# or
use Irsfa;

Irsfa::getToken();
```
For more information on how to use the other class, check out the awesome wiki [documentation](../../wiki).

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email cecepaprilianto@gmail.com instead of using the issue tracker.

## Credits

-   [Cecep Aprilianto](https://github.com/apriliantocecep)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
