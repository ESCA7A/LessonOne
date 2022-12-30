<?php

namespace Shellpea\Three;

use Shellpea\DeskInterface;
use Shellpea\TaskInterface;

class Task extends \Shellpea\Desc
{
    const INPUT = PHP_EOL . "number A: ";

    public function __call($name, $arguments)
    {
        echo TaskInterface::TASK_THREE;
        return $this->foo();
    }

    private function foo()
    {
        $numberA = readline(self::INPUT);

        if ($numberA % 2 != 0) {
            echo DeskInterface::THANKS_MESSAGE;

        } else {
            echo DeskInterface::ERROR_INPUT;

            return $this->foo();
        }
    }
}