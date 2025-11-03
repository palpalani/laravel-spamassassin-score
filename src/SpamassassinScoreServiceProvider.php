<?php

declare(strict_types=1);

namespace palPalani\SpamassassinScore;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SpamassassinScoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('spamassassin')
            ->hasConfigFile();
    }

    public function registeringPackage(): void
    {
        $this->app->singleton('spamassassin', fn($app) => new SpamassassinScore());
    }
}
