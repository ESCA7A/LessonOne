<?php

namespace Shellpea\Six;

use Shellpea\Desc;

class Task extends Desc
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