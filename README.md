# CBR Top WSAPI client wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/metmax/cbr-api-php.svg?style=flat-square)](https://packagist.org/packages/metmax/cbr-api-php)
[![Tests](https://img.shields.io/github/actions/workflow/status/metmax/cbr-api-php/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/metmax/cbr-api-php/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/metmax/cbr-api-php.svg?style=flat-square)](https://packagist.org/packages/metmax/cbr-api-php)

A PHP wrapper for interacting with CBR Top Webservices API and supports the AuthenticationService, ReservationService, ReferenceDataService.
This way you are able to handle the following operations:

- Submitting a new application or changing an existing application;
- Requesting open applications;
- Request previously purchased capacity via TOP;
- Reservation of requests at own capacity;
- Requesting the results;
- Request reference data such as the permitted products and locations, your registered instructors, your agreements with other trainers, and the available languages of the products;
- Changing the password;

## Installation

You can install the package via composer:

```bash
composer require metmax/cbr-api-php
```

Create the environment file
```bash
cp .env.dist .env
```

## Usage

```php
$skeleton = new MetMax\Cbr();
echo $skeleton->echoPhrase('Hello, MetMax!');
```

## Testing
The package [php-http/vcr-plugin](https://github.com/php-http/vcr-plugin) is being used to mock SOAP calls towards the CBR API.
Responses will be stored inside the fixtures/vcr/ directory.

When a fixture isn't available, an actual HTTP call will be initiated, while the response will be stored as a fixture. If you want to update existing fixtures or creating new endpoints, make sure that the API credentials are configured within the .env file.

Run full testsuite

```bash
composer test
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Credits

- [Jeroen de Haar](https://github.com/metmax-io)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
