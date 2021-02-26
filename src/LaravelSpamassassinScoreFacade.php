<?php

namespace palPalani\LaravelSpamassassinScore;

use Illuminate\Support\Facades\Facade;

/**
 * @see \palPalani\LaravelSpamassassinScore\LaravelSpamassassinScore
 */
class LaravelSpamassassinScoreFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-spamassassin-score';
    }
}
