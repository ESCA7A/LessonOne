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
            $classPath = $this->handler->replaceSlashes($classPath);
            $classPath = $this->handler->removeWordAndBackslash($classPath, 'LessonOne');
            $this->list[] = $this->handler->removeAfterDot($classPath);

        }

        return $this->list;
    }
}