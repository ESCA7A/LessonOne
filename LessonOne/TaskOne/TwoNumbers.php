<?php

namespace shellpea\LessonOne\TaskOne;

require 'bootstrap.php';
use shellpea\LessonOne\Desc;

class TwoNumbers extends Desc
{
    public function foo(){
        echo self::TASK_ONE;
        $num1 = readline("num 1: ");
        $num2 = readline("num 2: ");
        echo $num1 > $num2 ? $num1 + $num2 : $num1 / $num2;
    }
}

$twoNum = new TwoNumbers(); $twoNum->foo();