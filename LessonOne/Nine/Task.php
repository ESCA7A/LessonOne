<?php

namespace Shellpea\Nine;

use Shellpea\Desc;

class Task extends Desc
{
    const TRIANGLE_A = "Enter value triangle <a>: ";
    const TRIANGLE_B = "Enter value triangle <b>: ";
    const TRIANGLE_C = "Enter value triangle <c>: ";

    public function __call($name, $arguments)
    {
    }

    public function getDataAboutTriangle(): void
    {
        $a = abs((int) readline(self::TRIANGLE_A));
        $b = abs((int) readline(self::TRIANGLE_B));
        $c = abs((int) readline(self::TRIANGLE_C));

        if ($a == $b || $a == $c  || $b == $c) {
            echo "треугольник равнобедренный";

        } else {
            echo "треугольник не равнобедренный";
        }
    }
}