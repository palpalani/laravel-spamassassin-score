<?php

namespace palPalani\LaravelSpamassassinScore;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PalPalani\LaravelSpamassassinScore\LaravelSpamassassinScore
 */
class LaravelSpamassassinScoreFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-spamassassin-score';
    }
}
