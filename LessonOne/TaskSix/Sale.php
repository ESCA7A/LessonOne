<?php

namespace shellpea\LessonOne\TaskSix;

require 'bootstrap.php';
use shellpea\LessonOne\Desc;

class Sale extends Desc
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

$sale = new Sale(); $sale->trySale();