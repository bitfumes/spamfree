<?php

namespace Bitfumes\Spamfree\Main;

use Bitfumes\Spamfree\Detect\InvalidKeyword;
use Bitfumes\Spamfree\Detect\KeyHeldDown;

class Spam
{
    protected $inspections = [
        InvalidKeyword::class,
        KeyHeldDown::class
    ];

    public function detect($body)
    {
        foreach ($this->inspections as $inspection) {
            app($inspection)->detect($body);
        }
        return false;
    }
}
