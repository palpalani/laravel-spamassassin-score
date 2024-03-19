# Spamassassin spam score of emails.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/palpalani/laravel-spamassassin-score.svg?style=flat-square)](https://packagist.org/packages/palpalani/laravel-spamassassin-score)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/palpalani/laravel-spamassassin-score/run-tests?label=tests)](https://github.com/palpalani/laravel-spamassassin-score/actions?query=workflow%3ATests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/palpalani/laravel-spamassassin-score/Check%20&%20fix%20styling?label=code%20style)](https://github.com/palpalani/laravel-spamassassin-score/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/palpalani/laravel-spamassassin-score.svg?style=flat-square)](https://packagist.org/packages/palpalani/laravel-spamassassin-score)


Checks the spam score of email contents using spamassassin database.

## Installation

You can install the package via composer:

```bash
composer require palpalani/laravel-spamassassin-score
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="palPalani\SpamassassinScore\SpamassassinScoreServiceProvider" --tag="laravel-spamassassin-score-config"
```

This is the contents of the published config file:

```php
return [
    'api' => 'https://spamcheck.postmarkapp.com/filter',

    // Default "long". Must either be "long" for a full report of processing rules, or "short" for a score request.
    'option' => 'long'
];
```

## Usage

```php
$score = new \palPalani\SpamassassinScore\SpamassassinScore();
echo $score->getScore('Hello, palPalani!');
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

- [palPalani](https://github.com/palpalani)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
