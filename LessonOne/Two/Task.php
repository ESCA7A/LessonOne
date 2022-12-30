<?php

namespace Shellpea\Two;

use Shellpea\DeskInterface;
use Shellpea\TaskInterface;

class Task extends \Shellpea\Desc
{
    public function __call($name, $arguments)
    {
        echo TaskInterface::TASK_TWO;
        return $this->foo();
    }

    private function foo()
    {
        $age = readline("How old are you: ");
        echo ($age >= 25 && $age <= 40) ? DeskInterface::ACCEPT : DeskInterface::ERROR_INPUT;
    }
}