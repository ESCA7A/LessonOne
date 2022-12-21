<?php

namespace Engine;

use Engine\ClassReader;
use Engine\PathHandler;
use Shellpea\DeskInterface;

class ObjectManager
{
    static public function create(string $class): void
    {
        $pathHandler = new PathHandler();
        $classReader = new ClassReader($pathHandler);

        if(is_numeric($class)) {
            $reverseArray = array_flip($classReader->list);
            $reverseArray = array_values($reverseArray);
            $class = new $reverseArray[$class - 1];
            $class->magicCallMethod();
        }

        $classPath = array_search($class, $classReader->list);

        if(!class_exists($classPath)) {
            foreach ($classReader->list as $key => $value) {
                if(preg_match_all("/{$class}/iu", $key)) {
                    $class = new $key();
                    $class->magicCallMethod();
                }
            }
        } else {
            $class = new $classPath();
            $class->magicCallMethod();
        }

        echo DeskInterface::MISSING_TASK_MESSAGE;

    }
}