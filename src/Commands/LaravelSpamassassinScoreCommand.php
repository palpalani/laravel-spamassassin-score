<?php

namespace palPalani\LaravelSpamassassinScore\Commands;

use Illuminate\Console\Command;

class LaravelSpamassassinScoreCommand extends Command
{
    public $signature = 'laravel-spamassassin-score';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
