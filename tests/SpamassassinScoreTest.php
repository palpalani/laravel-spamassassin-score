<?php

declare(strict_types=1);

namespace palPalani\SpamassassinScore\Tests;

use palPalani\SpamassassinScore\SpamassassinScore;

class SpamassassinScoreTest extends TestCase
{
    /** @test */
    public function can_returns_spanassassin_score(): void
    {
        $score = (new SpamassassinScore())
            ->getScore($this->faker->randomHtml());
        $this->assertArrayHasKey('score', $score);
    }
}
