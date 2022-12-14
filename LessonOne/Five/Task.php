<?php

namespace Shellpea\Five;

use Shellpea\Decorator;

class Task extends \Shellpea\Desc
{
    const INPUT = PHP_EOL . "введите номер билета: ";

    public function __call($name, $arguments)
    {
        $this->tryLuck();
    }

    public function tryLuck()
    {
        echo self::TASK_FIVE;

        $ticket = readline(self::INPUT);
        $ticket = str_split($ticket);

        if(count($ticket) != 6) {

            Decorator::getAnswerBorder('номер билета должен быть из 6 цифр');
            $this->tryLuck();
        } else {
            $res1 = $ticket[0] + $ticket[1] + $ticket[2];
            $res2 = $ticket[3] + $ticket[4] + $ticket[5];
            echo $res1 == $res2 ? "счастливый" : "не повезло";
        }
    }
}