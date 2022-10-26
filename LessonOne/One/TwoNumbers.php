<?php

namespace Shellpea\One;

class TwoNumbers extends \Shellpea\Desc
{
    /**
     * @return int
     */
    public function foo(): int
    {
        echo self::TASK_ONE;
        $num1 = readline("num 1: ");
        $num2 = readline("num 2: ");
        try {
            if($num1 > $num2){

                return $num1 + $num2;
            }else {

                return $num1 / $num2;
            }
        }catch (\Exception $e){
            echo 'ITS TRHROW BLOCK!!!';
            
            return throw new \Exception($e->getMessage('скорее всего вы ввели не число. Попробуйте еще раз'));
        }
    }
}
