<?php

namespace Shellpea\Three;

class Task extends \Shellpea\Desc
{
    public function foo()
    {
        echo self::TASK_THREE;
        $a = readline("number A: ");
        echo ($a % 2 == 0) ? 'false' . PHP_EOL : 'true' . PHP_EOL;
    }
}