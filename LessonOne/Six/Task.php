<?php

namespace Shellpea\Six;

use Shellpea\Desc;
use Shellpea\Decorator;
use Shellpea\TaskInterface;

class Task extends Desc
{
    const INPUT = PHP_EOL . "сумма покупки: ";

    public function __call($name, $arguments)
    {
        echo TaskInterface::TASK_SIX;
        return $this->trySale();
    }

    public function trySale()
    {
        $order = readline(self::INPUT);

        if ($order < 1000){
            Decorator::getAnswerBorder("скидка не предоставляется");
        } else {
            $sale = $order / 100 * 15;
            Decorator::getAnswerBorder($order - $sale);
        }
    }
}