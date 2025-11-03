<?php

declare(strict_types=1);

use palPalani\SpamassassinScore\Facades\SpamassassinScore;
use palPalani\SpamassassinScore\SpamassassinScore as SpamassassinScoreService;
use palPalani\SpamassassinScore\SpamassassinScoreServiceProvider;

it('registers the service provider', function () {
    $providers = app()->getLoadedProviders();

    expect($providers)->toHaveKey(SpamassassinScoreServiceProvider::class);
});

it('binds spamassassin service to container', function () {
    $service = app('spamassassin');

    expect($service)->toBeInstanceOf(SpamassassinScoreService::class);
});

it('can resolve spamassassin service from container', function () {
    $service = app(SpamassassinScoreService::class);

    expect($service)->toBeInstanceOf(SpamassassinScoreService::class);
});

it('facade resolves to spamassassin service', function () {
    expect(SpamassassinScore::getFacadeRoot())
        ->toBeInstanceOf(SpamassassinScoreService::class);
});

