<?php

namespace Shellpea\One;

use Shellpea\Decorator;
use Shellpea\TaskInterface;

class Task extends \Shellpea\Desc
{
    const INPUT_1 = PHP_EOL . "Enter number 1: ";
    const INPUT_2 = PHP_EOL . "Enter number 2: ";

    public function __call($name, $arguments)
    {
        echo TaskInterface::TASK_ONE;
        return $this->foo();
    }

    private function foo()
    {
        $num1 = readline(self::INPUT_1);
        $num2 = readline(self::INPUT_2);

        if (!is_numeric($num1) || !is_numeric($num2)) {
            Decorator::getAnswerBorder('скорее всего вы ввели не число. Попробуйте еще раз');

            return $this->foo();
        }

        if ($num1 >= $num2) {
            Decorator::getAnswerBorder($num1 + $num2);
        } else {
            Decorator::getAnswerBorder($num1 * $num2);
        }
    }
}