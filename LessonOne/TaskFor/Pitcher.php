<?php

namespace shellpea\LessonOne\TaskFor;

require 'bootstrap.php';
use shellpea\LessonOne\Desc;

class Pitcher extends Desc
{
    public function getPitch(){
        echo self::TASK_FOR;
        $pitch = readline("до мишени около 30 метров. Бросайте: ");
        if ($pitch < 28 && $pitch >= 0) echo "НЕДОЛЕТ";
        if ($pitch >= 28 && $pitch <= 30) echo "ПОПАЛ";
        if ($pitch > 30) echo "ПЕРЕЛЕТ";
        if ($pitch < 0) echo "НЕ БЕЙ ПО СВОИМ";
    }
}

$pitcher = new Pitcher(); $pitcher->getPitch();