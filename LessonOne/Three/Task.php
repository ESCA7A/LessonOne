<?php

namespace Shellpea\Three;

class Task extends \Shellpea\Desc
{
    const INPUT = PHP_EOL . "number A: ";
    public function __call($name, $arguments)
    {
        $this->foo();
    }

    private function foo()
    {
        echo self::TASK_THREE;

        $a = readline(self::INPUT);

        echo ($a % 2 == 0) ? self::FALSE : self::THANKS_MESSAGE;
    }
}