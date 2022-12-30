<?php

namespace Shellpea\Eight;

use Shellpea\Desc;
use Shellpea\DeskInterface;
use Shellpea\TaskInterface;

class Task extends Desc
{
    const INPUT = PHP_EOL . "Enter the number around -5..3: ";

    public function __call($name, $arguments)
    {
        echo TaskInterface::TASK_EIGHT;
        $this->validateNumber();
    }

    public function validateNumber()
    {
        $number = (int) readline(self::INPUT);

        if (is_numeric($number) && $number >= -5 && $number <= 3) {
            echo DeskInterface::THANKS_MESSAGE;

            return true;
        } else {
            echo DeskInterface::ERROR_INPUT;
        }

        return $this->validateNumber();
    }
}