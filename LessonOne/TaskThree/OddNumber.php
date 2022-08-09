<?php

namespace shellpea\LessonOne\TaskThree;

require 'bootstrap.php';
use shellpea\LessonOne\Desc;

class OddNumber extends Desc
{
    public function foo(){
        echo self::TASK_THREE;
        $a = readline("number A: ");
        echo ($a % 2 == 0) ? 'false' : 'true';
    }
}

$oddNum = new OddNumber(); $oddNum->foo();