<?php

namespace palPalani\SpamassassinScore;

use Illuminate\Support\Facades\Facade;

/**
 * @see \palPalani\SpamassassinScore\SpamassassinScore
 */
class SpamassassinScoreFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-spamassassin-score';
    }
}
