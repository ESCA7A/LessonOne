<?php

namespace Shellpea\Seven;

use Shellpea\Desc;

class Task extends Desc
{
    const CIRCLE_PHRASE = "Enter the area of the circle: ";
    const SQUAD_PHRASE = "Enter the area of the squad: ";

    private function getCircleDiameter(): ?int
    {
        $area = (int) readline(self::CIRCLE_PHRASE);
        return  2 * sqrt($area / M_PI);
    }

    private function getSquadDiagonal(): ?int
    {
        $squadArea =  (int) readline(self::SQUAD_PHRASE);
        return sqrt(2 * $squadArea);
    }

    public function calculate(): void
    {
        echo ($this->getCircleDiameter() >= $this->getSquadDiagonal()) ?
            "квадрат поместиться в круге" : "круг поместиться в квадрате";
    }
}