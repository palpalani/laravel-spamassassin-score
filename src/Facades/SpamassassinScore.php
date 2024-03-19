<?php

namespace palPalani\SpamassassinScore\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \palPalani\SpamassassinScore\SpamassassinScore
 */
class SpamassassinScore extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'spamassassin';
    }
}
