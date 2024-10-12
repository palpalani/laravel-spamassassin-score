<?php

declare(strict_types=1);

namespace palPalani\SpamassassinScore;

use Illuminate\Support\Facades\Http;

class SpamassassinScore
{
    public function getScore(string $html)
    {
        $response = Http::post(config('spamassassin.api'), [
            'email' => $html,
            'options' => config('spamassassin.api'),
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return $response->json();
    }
}
