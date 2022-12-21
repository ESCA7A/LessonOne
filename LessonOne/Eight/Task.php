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

    public function validateNumber(): mixed
    {
        $number = (int) readline(self::INPUT);

        if(!is_numeric($number)) {

            echo self::ERROR_INPUT;

        } else {
            if ($number >= -5 && $number <= 3) {
                echo self::THANKS_MESSAGE;

                return null;
            }
        }

        return $this->validateNumber();
    }
}