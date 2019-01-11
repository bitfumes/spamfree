<?php

namespace Bitfumes\SpamFree\Detect;

class KeyHeldDown
{
    public function detect($body)
    {
        if (preg_match('/(.)\\1{4,}/', $body)) {
            throw new \Exception('Your reply contain spam');
        }
    }
}
