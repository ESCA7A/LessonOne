<?php

namespace Shellpea\Eight;

use Shellpea\Desc;

class Task extends Desc
{
    const NUMBER_PHRASE = "Enter the number around -5..3: ";

    public function validateNumber(): bool
    {
        $number = (int) readline(self::NUMBER_PHRASE);

        if ($number >= -5 && $number <= 3) {
            echo "thanks a lot";

            return true;
        }

        echo "stupid human". PHP_EOL;
        return false;
    }
}