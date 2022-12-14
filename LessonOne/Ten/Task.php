<?php

namespace Shellpea\Ten;

use Shellpea\Desc;
use Shellpea\Decorator;

class Task extends Desc
{
    const INPUT = PHP_EOL . "Enter the number what's be factorial: ";

    public function __call($name, $arguments)
    {
        $this->foo();
    }

    private function foo(): void
    {
        $fac = abs((int) readline(self::INPUT));

        switch($fac) {
            case 0:
                echo "0 не является натуральным числом";
                break;
            case 1:
                echo 1;
                break;
            case 2;
                echo 2;
                break;
            default:
                for($i = 1, $summa = 1; $i <= $fac; $i++) {
                    $summa = $i * $summa;
                }
                Decorator::getAnswerBorder($summa);
        }
    }


}