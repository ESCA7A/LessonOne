<?php

namespace Engine;

use Shellpea\DeskInterface;

class ObjectManager
{
    static public function create(string $class): void
    {
        if(class_exists($class)) {
            $class = new $class();
            $class->magicCallMethod();
        } else {
            echo DeskInterface::MISSING_TASK_MESSAGE;
        }
    }
}