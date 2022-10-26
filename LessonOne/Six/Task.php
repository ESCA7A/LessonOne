<?php

namespace Shellpea\Six;

class Task extends \Shellpea\Desc
{
    public function trySale(){
        echo self::TASK_SIX;
        $order = readline("сумма покупки: ");
        if ($order < 1000){
            echo "скидка не предоставляется";
        }else {
            $sale = $order / 100 * 15;
            echo $order-$sale;
        }
    }
}

$sale = new Task(); $sale->trySale();