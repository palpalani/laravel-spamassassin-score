<?php

namespace palPalani\SpamassassinScore;

use Illuminate\Support\Facades\Http;

class SpamassassinScore
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
