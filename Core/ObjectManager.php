<?php

namespace Engine;

use Engine\ClassReader;
use Shellpea\DeskInterface;

class ObjectManager
{
    static public function create(string $class): void
    {
        $classReader = new ClassReader(new \Engine\PathHandler());
        $class = array_search($class, $classReader->list);

        if(class_exists($class)) {

            $class = new $class();
            $class->magicCallMethod();
        } else {
            echo DeskInterface::MISSING_TASK_MESSAGE;
        }
    }
}