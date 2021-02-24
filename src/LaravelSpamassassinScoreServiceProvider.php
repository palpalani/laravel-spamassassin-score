<?php

namespace palPalani\LaravelSpamassassinScore;

use PalPalani\LaravelSpamassassinScore\Commands\LaravelSpamassassinScoreCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelSpamassassinScoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-spamassassin-score')
            ->hasConfigFile()
            //->hasViews()
            //->hasMigration('create_laravel_spamassassin_score_table')
            ->hasCommand(LaravelSpamassassinScoreCommand::class);
    }
}
