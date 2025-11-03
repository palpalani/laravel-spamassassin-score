<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use palPalani\SpamassassinScore\Facades\SpamassassinScore;

beforeEach(function (): void {
    Config::set('spamassassin.api', 'https://spamcheck.postmarkapp.com/filter');
    Config::set('spamassassin.option', 'long');
});

it('can use facade to get spam score', function (): void {
    Http::fake([
        'spamcheck.postmarkapp.com/filter' => Http::response([
            'success' => true,
            'score' => 3.2,
            'rules' => [
                'RULE_NAME' => 1.5,
            ],
        ], 200),
    ]);

    $result = SpamassassinScore::getScore('<html><body>Test email</body></html>');

    expect($result)
        ->toBeArray()
        ->toHaveKey('success')
        ->toHaveKey('score')
        ->toHaveKey('rules')
        ->and($result['score'])->toBe(3.2)
        ->and($result['rules'])->toBeArray();
});

it('facade returns same result as direct instantiation', function (): void {
    Http::fake([
        'spamcheck.postmarkapp.com/filter' => Http::response([
            'success' => true,
            'score' => 5.0,
        ], 200),
    ]);

    $emailContent = '<html><body>Test</body></html>';

    $facadeResult = SpamassassinScore::getScore($emailContent);
    $directResult = (new \palPalani\SpamassassinScore\SpamassassinScore())->getScore($emailContent);

    expect($facadeResult)->toEqual($directResult);
});
