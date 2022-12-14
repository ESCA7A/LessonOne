<?php

namespace Shellpea\Two;

class Task extends \Shellpea\Desc
{
    public function __call($name, $arguments)
    {
        $this->foo();
    }

    private function foo()
    {
        echo self::TASK_TWO;
        $age = readline("How old are you: ");
        echo ($age >= 25 && $age <= 40) ? self::ACCEPT : self::ERROR;
    }
}