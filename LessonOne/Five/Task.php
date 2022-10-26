<?php

namespace Shellpea\Five_5;

class Task extends \Shellpea\Desc
{
    public function tryLuck(){
        echo self::TASK_FIVE;
        $ticket = readline("введите номер билета: ");
        $ticket = str_split($ticket);
        if(count($ticket) != 6) {
            exit('номер билета должен быть из 6 цифр');
        }else{
            $res1 = $ticket[0] + $ticket[1] + $ticket[2];
            $res2 = $ticket[3] + $ticket[4] + $ticket[5];
            echo $res1 == $res2 ? "счастливый" : "не повезло";
        }
    }
}

$ticket = new Task(); $ticket->tryLuck();