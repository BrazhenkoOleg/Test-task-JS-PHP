<?php

class Validation {
    private $code;

    public function __construct(string $code) {
        $this->code = $code;
    }

    public function isValid() : bool {
        $stack = [];

        for ($i = 0; $i < strlen($this->code); $i++) {
            $char = $this->code[$i];
            if ($char === '{') {
                array_push($stack, '{');
            } elseif ($char === '}') {
                if (empty($stack)) return false;
                array_pop($stack);
            }
        }

        return empty($stack);
    }
}