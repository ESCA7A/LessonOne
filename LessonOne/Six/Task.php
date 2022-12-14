<?php

namespace Shellpea\Six;

use Shellpea\Desc;
use Shellpea\Decorator;

class Task extends Desc
{
    const INPUT = PHP_EOL . "сумма покупки: ";

    public function __call($name, $arguments)
    {
        $this->trySale();
    }

    public function trySale()
    {
        echo self::TASK_SIX;

        $order = readline(self::INPUT);

        if ($order < 1000){
            Decorator::getAnswerBorder("скидка не предоставляется");
        } else {
            $sale = $order / 100 * 15;
            Decorator::getAnswerBorder($order-$sale);
        }
    }
}