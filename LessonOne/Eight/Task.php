<?php

namespace Shellpea\Eight;

use Shellpea\Desc;

class Task extends Desc
{
    const INPUT = PHP_EOL . "Enter the number around -5..3: ";

    public function __call($name, $arguments)
    {
        $this->validateNumber();
    }

    public function validateNumber(): bool
    {
        $number = readline(self::INPUT);

        if ($number >= -5 && $number <= 3) {
            echo self::THANKS_MESSAGE;

            return true;
        }

        echo self::ERROR_INPUT;

        return $this->validateNumber();
    }
}