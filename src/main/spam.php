<?php

namespace Bitfumes\SpamFree\Main;

use Bitfumes\SpamFree\Detect\InvalidKeyword;
use Bitfumes\SpamFree\Detect\KeyHeldDown;

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
