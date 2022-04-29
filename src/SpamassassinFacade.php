<?php

namespace palPalani\SpamassassinScore;

use Illuminate\Support\Facades\Facade;

/**
 * @see \palPalani\SpamassassinScore\SpamassassinScore
 */
class SpamassassinFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'spamassassin';
    }
}
