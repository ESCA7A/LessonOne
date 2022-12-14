<?php

namespace Shellpea;

class Decorator
{
    static function getAnswerBorder(int|string $answerVariable): void
    {
        echo PHP_EOL . "
        +-----------------------------------------+
        |   OUTPUT : {$answerVariable}    
        +-----------------------------------------+
                " . PHP_EOL;
    }
}