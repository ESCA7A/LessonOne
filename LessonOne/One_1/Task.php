<?php

namespace Shellpea\One_1;

class Task extends \Shellpea\Desc
{
    public function foo(){
        echo self::TASK_ONE;
        $num1 = readline("num 1: ");
        $num2 = readline("num 2: ");
        echo $num1 > $num2 ? $num1 + $num2 : $num1 / $num2;
    }
}
