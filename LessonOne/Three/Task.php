<?php

namespace Shellpea\TaskThree;

class Task extends \Shellpea\Desc
{
    public function foo(){
        echo self::TASK_THREE;
        $a = readline("number A: ");
        echo ($a % 2 == 0) ? 'false' : 'true';
    }
}

$oddNum = new Task(); $oddNum->foo();