<?php

namespace Bitfumes\SpamFree\Tests\Unit;

use Bitfumes\SpamFree\Tests\TestCase;
use Bitfumes\SpamFree\Main\Spam;

class SpamTest extends TestCase
{
    /** @test */
    public function it_validate_spam_keywords()
    {
        $spam = new Spam;
        $this->assertFalse($spam->detect('innocent reply here'));
        $this->expectExceptionMessage('Your reply contain spam');
        $spam->detect('yahoo customer support');
    }

    /** @test */
    public function it_check_for_key_held_hdown()
    {
        $spam = new Spam;
        $this->expectExceptionMessage('Your reply contain spam');
        $spam->detect('Heloo aaaaaaaaa');
    }
}
