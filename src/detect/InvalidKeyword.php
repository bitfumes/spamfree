<?php

namespace Bitfumes\SpamFree\Detect;

class InvalidKeyword
{
    public $invalidKeywords;

    public function __construct()
    {
        $this->invalidKeywords = config('spamfree.invalidKeywords');
    }

    public function detect($body)
    {
        foreach ($this->invalidKeywords as $keyword) {
            if (stripos($body, $keyword) !== false) {
                throw new \Exception('Your reply contain spam');
            }
        }
    }
}
