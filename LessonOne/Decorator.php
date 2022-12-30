<?php

namespace Shellpea;

class Decorator
{
    static function getAnswerBorder(int|string $answerVariable): void
    {
        echo PHP_EOL . "
        +-----------------------------------------+
        |   OUTPUT : {$answerVariable}
        +-----------------------------------------+" . PHP_EOL;
    }

    static function getTaskBorder(array $arrayClasses): void
    {
        $i = 1;
        echo PHP_EOL . "+-----------------------------------------+" . PHP_EOL;

        foreach ($arrayClasses as $index => $value) {
            echo "|> $i) $value" . PHP_EOL;
            $i++;
        }

        echo "+-----------------------------------------+" . PHP_EOL;

    }
}