<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use palPalani\SpamassassinScore\SpamassassinScore;

beforeEach(function (): void {
    Config::set('spamassassin.api', 'https://spamcheck.postmarkapp.com/filter');
    Config::set('spamassassin.option', 'long');
});

it('can get spam score from API', function (): void {
    Http::fake([
        'spamcheck.postmarkapp.com/filter' => Http::response([
            'success' => true,
            'score' => 2.5,
            'rules' => [],
        ], 200),
    ]);

    $score = (new SpamassassinScore())->getScore('<html><body>Test email</body></html>');

    expect($score)
        ->toBeArray()
        ->toHaveKey('success')
        ->toHaveKey('score')
        ->and($score['success'])->toBeTrue()
        ->and($score['score'])->toBe(2.5);
});

it('returns response even when API call fails', function (): void {
    Http::fake([
        'spamcheck.postmarkapp.com/filter' => Http::response([
            'success' => false,
            'message' => 'Invalid request',
        ], 400),
    ]);

    $score = (new SpamassassinScore())->getScore('<html><body>Test email</body></html>');

    expect($score)->toBeArray()->toHaveKey('success');
});

it('uses configured API endpoint', function (): void {
    $customApi = 'https://custom-api.example.com/check';
    Config::set('spamassassin.api', $customApi);

    Http::fake([
        $customApi => Http::response([
            'success' => true,
            'score' => 0.0,
        ], 200),
    ]);

    (new SpamassassinScore())->getScore('test email');

    Http::assertSent(fn($request) => $request->url() === $customApi);
});

it('sends email content in request body', function (): void {
    $emailContent = '<html><body>Test email content</body></html>';

    Http::fake([
        'spamcheck.postmarkapp.com/filter' => Http::response([
            'success' => true,
            'score' => 1.0,
        ], 200),
    ]);

    (new SpamassassinScore())->getScore($emailContent);

    Http::assertSent(function ($request) use ($emailContent) {
        $data = $request->data();

        return isset($data['email']) && $data['email'] === $emailContent;
    });
});
