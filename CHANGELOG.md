# Changelog

All notable changes to `laravel-spamassassin-score` will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## Release v1.1.0 - 2025-11-03

### What's Changed

* Bump stefanzweifel/git-auto-commit-action from 4 to 7 by @dependabot[bot] in https://github.com/palpalani/laravel-spamassassin-score/pull/3
* Bump actions/checkout from 3 to 5 by @dependabot[bot] in https://github.com/palpalani/laravel-spamassassin-score/pull/4
* Bump actions/cache from 2 to 4 by @dependabot[bot] in https://github.com/palpalani/laravel-spamassassin-score/pull/5

### New Contributors

* @dependabot[bot] made their first contribution in https://github.com/palpalani/laravel-spamassassin-score/pull/3

**Full Changelog**: https://github.com/palpalani/laravel-spamassassin-score/compare/1.0.0...1.1.0

## [Unreleased]

### Added

- Pest testing framework support
- Laravel Pint for code formatting (replaced PHP CS Fixer)
- Parallel processing support for PHPStan, Pest, and Pint
- Additional keywords to composer.json (spamassassin, spam-score, php, laravel, package, email, spam-check)
- PHPStan for static analysis (replaced Psalm)

### Changed

- Migrated from PHP CS Fixer to Laravel Pint
- Migrated from Psalm to PHPStan
- Updated Larastan to version 3.0
- Updated PHPStan-related packages to version 2.0
- Updated PHPUnit configuration schema to latest version
- Updated test scripts to use Pest instead of PHPUnit
- Updated GitHub Actions workflows to use Pest and Pint
- Enhanced composer.json with best practices

### Removed

- PHPUnit direct usage (replaced with Pest, though still used internally)
- PHP CS Fixer (replaced with Laravel Pint)
- Psalm (replaced with PHPStan)
- pest-plugin-laravel (removed due to dependency conflicts)

## [1.0.0](https://github.com/palpalani/laravel-spamassassin-score/releases/tag/1.0.0) - 2025-10-13

### Added

- Laravel 11 and 12 support
- Dependabot configuration for automatic dependency updates
- Dependabot auto-merge workflow
- Update changelog workflow

### Changed

- Updated PHP requirement from `^8.2` to `^8.3`
- Updated Laravel support from `^9.0|^10.0|^11.0` to `^11.0|^12.0` (dropped Laravel 9 and 10 support)
- Updated GitHub Actions workflows
- Updated PHP CS Fixer configuration
- Updated PHPStan configuration

### Fixed

- Fixed styling issues
- Updated README documentation

## [0.2.7](https://github.com/palpalani/laravel-spamassassin-score/releases/tag/0.2.7) - 2022-04-29

### Changed

- Changed config file name for better consistency

## [0.2.6](https://github.com/palpalani/laravel-spamassassin-score/releases/tag/0.2.6) - 2022-04-29

### Changed

- Config file name updates

## [0.2.5](https://github.com/palpalani/laravel-spamassassin-score/releases/tag/0.2.5) - 2022-04-29

### Changed

- Config file improvements

## [0.2.4](https://github.com/palpalani/laravel-spamassassin-score/releases/tag/0.2.4) - 2022-04-29

### Changed

- Config file updates

## [0.2.3](https://github.com/palpalani/laravel-spamassassin-score/releases/tag/0.2.3) - 2021-08-23

### Changed

- Minor updates and fixes

## [0.2.2](https://github.com/palpalani/laravel-spamassassin-score/releases/tag/0.2.2) - 2021-08-23

### Changed

- Minor updates and fixes

## [0.2.1](https://github.com/palpalani/laravel-spamassassin-score/releases/tag/0.2.1) - 2021-08-23

### Changed

- Minor updates and fixes

## [0.2.0](https://github.com/palpalani/laravel-spamassassin-score/releases/tag/0.2.0) - 2021-08-16

### Added

- Improved tests
- Enhanced documentation
- Simplified class names for better understanding

### Changed

- Updated PHP CS Fixer
- Improved code structure

### Fixed

- Fixed namespace issues
- Code styling improvements

## [0.1.0](https://github.com/palpalani/laravel-spamassassin-score/releases/tag/0.1.0) - 2021-02-26

### Added

- Initial release
- SpamAssassin score checking functionality
- Configuration file support
- Facade support for easy access
