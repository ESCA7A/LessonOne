<?php

namespace Shellpea\Nine;

use Shellpea\Desc;
use Shellpea\Decorator;

class Task extends Desc
{
    const TRIANGLE_A = PHP_EOL . "Enter value triangle <a>: ";
    const TRIANGLE_B = PHP_EOL . "Enter value triangle <b>: ";
    const TRIANGLE_C = PHP_EOL . "Enter value triangle <c>: ";

    public function __call($name, $arguments)
    {
        $this->getDataAboutTriangle();
    }

    public function getDataAboutTriangle(): void
    {
        $a = abs((int) readline(self::TRIANGLE_A));
        $b = abs((int) readline(self::TRIANGLE_B));
        $c = abs((int) readline(self::TRIANGLE_C));

        if ($a == $b || $a == $c  || $b == $c) {
            Decorator::getAnswerBorder("треугольник равнобедренный");
        } else {
            Decorator::getAnswerBorder("треугольник не равнобедренный");
        }
    }
}