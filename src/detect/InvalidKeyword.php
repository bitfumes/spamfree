<?php

namespace Bitfumes\Spamfree\Detect;

class InvalidKeyword
{
    public $invalidKeywords = ['Claims you are a winner'];

    public function detect($body)
    {
        foreach ($this->invalidKeywords as $keyword) {
            if (stripos($body, $keyword) !== false) {
                throw new \Exception('Your reply contain spam');
            }
        }
    }
}
