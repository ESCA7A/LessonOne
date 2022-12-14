<?php

namespace Shellpea\One;

use Shellpea\Decorator;

class Task extends \Shellpea\Desc
{
    const INPUT_1 = PHP_EOL . "Enter number 1: ";
    const INPUT_2 = PHP_EOL . "Enter number 2: ";

    public function __call($name, $arguments)
    {
        $this->foo();
    }

    private function foo()
    {
        echo self::TASK_ONE;

        $num1 = readline(self::INPUT_1);
        $num2 = readline(self::INPUT_2);

        if (!is_numeric($num1) || !is_numeric($num2)) {
            Decorator::getAnswerBorder('скорее всего вы ввели не число. Попробуйте еще раз');
            $this->foo();
        }

        if($num1 >= $num2) {
            Decorator::getAnswerBorder($num1 + $num2);
        } else {
            Decorator::getAnswerBorder(($num1 * $num2));
        }
    }
}