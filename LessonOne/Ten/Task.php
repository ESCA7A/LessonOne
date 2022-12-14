<?php

namespace Shellpea\Ten;

use Shellpea\Desc;

class Task extends Desc
{
    const FAC_PHRASE = "Enter the number what's be factorial: ";

    public function __call($name, $arguments)
    {
    }

    public function foo()
    {
        $fac = abs((int) readline(self::FAC_PHRASE));

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

                echo $summa;
        }
    }
}