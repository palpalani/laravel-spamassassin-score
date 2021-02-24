<?php

namespace palPalani\LaravelSpamassassinScore;

use Illuminate\Support\Facades\Http;

class LaravelSpamassassinScore
{
    public function getScore(string $html)
    {
        $response = Http::post(config('spamassassin-score.api'), [
            'email' => $html,
            'options' => config('spamassassin-score.api'),
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return $response->json();
    }
}
