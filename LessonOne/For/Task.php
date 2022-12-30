<?php

namespace Shellpea\For;

use Shellpea\Decorator;
use Shellpea\TaskInterface;

class Task extends \Shellpea\Desc
{
    const INPUT = PHP_EOL . "до мишени около 30 метров. Бросайте: ";

    public function __call($name, $arguments)
    {
        echo TaskInterface::TASK_FOR;
        $this->getPitch();
    }

    public function getPitch()
    {
        $pitch = readline(self::INPUT);

        if ($pitch < 28 && $pitch >= 0) Decorator::getAnswerBorder("НЕДОЛЕТ");
        if ($pitch >= 28 && $pitch <= 30) Decorator::getAnswerBorder("ПОПАЛ");
        if ($pitch > 30) Decorator::getAnswerBorder("ПЕРЕЛЕТ");
        if ($pitch < 0) Decorator::getAnswerBorder("НЕ БЕЙ ПО СВОИМ");
    }
}