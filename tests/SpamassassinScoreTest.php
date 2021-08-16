<?php

use palPalani\LaravelSpamassassinScore\LaravelSpamassassinScore;
use palPalani\LaravelSpamassassinScore\Tests\TestCase;

class SpamassassinScoreTest extends TestCase
{
    /** @test */
    public function can_returns_spanassassin_score()
    {
        $score = (new LaravelSpamassassinScore())
            ->getScore($this->faker->randomHtml());
        $this->assertArrayHasKey('score', $score);
    }
}
