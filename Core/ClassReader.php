<?php

namespace Engine;

use Engine\PathHandler;

class ClassReader
{
    public array $list = [];

    private PathHandler $handler;

    public function __construct(PathHandler $handler)
    {
        $this->handler = $handler;
        $this->findClasses();
    }

    public function findClasses(): array
    {
        $classesPath = glob('LessonOne/[a-zA-Z+]*/*');

        foreach($classesPath as $classPath) {

            $classPath = '/Shellpea/'. $classPath;
            $classPath = $this->handler->revertToBackSlashes($classPath);
            $classPath = $this->handler->removeWordAndBackslashAfter($classPath, 'LessonOne');
            $pathArray[] = $this->handler->removeAfterDot($classPath);
        }

        $reverseArray = array_flip($pathArray);

        foreach ($reverseArray as $index => $value) {
            $value = preg_replace(['/\\\Task/', '/LessonOne\\\/', '/\\\Shellpea\\\/' ], '', $index);
            $this->list[$index] = $value;
        }

        return $this->list;
    }
}