<?php

namespace Shellpea\Five;

use Shellpea\Decorator;
use Shellpea\TaskInterface;

class Task extends \Shellpea\Desc
{
    const INPUT = PHP_EOL . "введите номер билета: ";

    public function __call($name, $arguments)
    {
        echo TaskInterface::TASK_FIVE;
        return $this->tryLuck();
    }

    public function tryLuck()
    {
        $ticket = readline(self::INPUT);
        $ticket = str_split($ticket);

        if (count($ticket) != 6) {
            Decorator::getAnswerBorder('номер билета должен быть из 6 цифр');

            return $this->tryLuck();
        }

        $res1 = $ticket[0] + $ticket[1] + $ticket[2];
        $res2 = $ticket[3] + $ticket[4] + $ticket[5];

        echo $res1 == $res2
            ? Decorator::getAnswerBorder("счастливый")
            : Decorator::getAnswerBorder("не повезло");
    }
}