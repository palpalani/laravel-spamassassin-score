# Laravel SpamAssassin Score

[![Latest Version on Packagist](https://img.shields.io/packagist/v/palpalani/laravel-spamassassin-score.svg?style=flat-square)](https://packagist.org/packages/palpalani/laravel-spamassassin-score)
[![Total Downloads](https://img.shields.io/packagist/dt/palpalani/laravel-spamassassin-score.svg?style=flat-square)](https://packagist.org/packages/palpalani/laravel-spamassassin-score)
[![License](https://img.shields.io/packagist/l/palpalani/laravel-spamassassin-score.svg?style=flat-square)](https://packagist.org/packages/palpalani/laravel-spamassassin-score)

[![GitHub Tests](https://img.shields.io/github/actions/workflow/status/palpalani/laravel-spamassassin-score/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/palpalani/laravel-spamassassin-score/actions/workflows/run-tests.yml)
[![Code Style](https://img.shields.io/github/actions/workflow/status/palpalani/laravel-spamassassin-score/php-cs-fixer.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/palpalani/laravel-spamassassin-score/actions/workflows/php-cs-fixer.yml)
[![Psalm](https://img.shields.io/github/actions/workflow/status/palpalani/laravel-spamassassin-score/psalm.yml?branch=main&label=psalm&style=flat-square)](https://github.com/palpalani/laravel-spamassassin-score/actions/workflows/psalm.yml)

[![PHP Version Support](https://img.shields.io/badge/PHP-%3E%3D%208.3-8892BF.svg?style=flat-square)](https://php.net)
[![Laravel Version Support](https://img.shields.io/badge/Laravel-%5E11.0%20%7C%20%5E12.0-FF2D20.svg?style=flat-square)](https://laravel.com)

A Laravel package to check the spam score of email contents before sending them using the SpamAssassin filter API.

## Features

- ✅ Check email spam scores using SpamAssassin API
- ✅ Simple and intuitive API
- ✅ Facade support for easy access
- ✅ Fully configurable
- ✅ Supports both "short" and "long" report formats
- ✅ Works with Laravel 11 and 12
- ✅ Well tested
- ✅ PHP 8.3+ support

## Requirements

- PHP >= 8.3
- Laravel ^11.0 | ^12.0

## Installation

You can install the package via Composer:

```bash
composer require palpalani/laravel-spamassassin-score
```

The package will automatically register its service provider and facade.

## Configuration

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-spamassassin-score-config"
```

This is the contents of the published config file:

```php
return [
    'api' => 'https://spamcheck.postmarkapp.com/filter',

    // Default "long". Must either be "long" for a full report of processing rules, or "short" for a score request.
    'option' => 'long'
];
```

### Configuration Options

- **`api`**: The SpamAssassin API endpoint URL
- **`option`**: The report format - either `"long"` for a full report of processing rules, or `"short"` for a score request only

## Usage

### Using the Facade

```php
use palPalani\SpamassassinScore\Facades\SpamassassinScore;

// Get spam score with default configuration
$result = SpamassassinScore::getScore($emailContent);

// The result will contain:
// - 'score': The spam score
// - 'success': Whether the check was successful
// Additional fields when using 'long' option format
```

### Using Dependency Injection

```php
use palPalani\SpamassassinScore\SpamassassinScore;

class EmailController extends Controller
{
    public function __construct(
        private SpamassassinScore $spamassassinScore
    ) {}

    public function checkEmail(Request $request)
    {
        $result = $this->spamassassinScore->getScore($request->input('email'));
        
        if ($result['score'] > 5.0) {
            return response()->json(['message' => 'Email may be spam'], 400);
        }
        
        // Proceed with sending email
    }
}
```

### Using Direct Instantiation

```php
use palPalani\SpamassassinScore\SpamassassinScore;

$spamassassinScore = new SpamassassinScore();
$result = $spamassassinScore->getScore($emailContent);

// Access the score
$score = $result['score'] ?? null;
```

### Example Response

When using the default "long" option, the response includes:

```php
[
    'success' => true,
    'score' => 2.5,
    'rules' => [
        // Full list of rules that matched
    ],
    'description' => '...'
]
```

When using "short" option, the response is:

```php
[
    'success' => true,
    'score' => 2.5
]
```

## Testing

Run the tests with:

```bash
composer test
```

For test coverage:

```bash
composer test-coverage
```

## Code Quality Tools

This package uses several code quality tools:

- **[PHPUnit](https://phpunit.de/)** - Testing framework
- **[Pest](https://pestphp.com/)** - Testing framework (alternative)
- **[PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer)** - Code style fixing
- **[PHPStan](https://phpstan.org/)** - Static analysis
- **[Larastan](https://github.com/larastan/larastan)** - Laravel-specific static analysis
- **[Psalm](https://psalm.dev/)** - Static analysis

Run static analysis:

```bash
composer analyse  # PHPStan
composer psalm    # Psalm
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests.

## Security Vulnerabilities

Please review [our security policy](https://github.com/palpalani/laravel-spamassassin-score/security/policy) on how to report security vulnerabilities.

## Credits

- [palPalani](https://github.com/palpalani)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
