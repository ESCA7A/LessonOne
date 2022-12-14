<?php

namespace Shellpea;

use Engine\ClassReader;
use Engine\PathHandler;
use Engine\ObjectManager;

abstract class Desc implements DeskInterface, TaskInterface
{
    const INPUT = PHP_EOL . 'введите имя задачи к которой нужно перейти: ';

    static public function getMenu()
    {
        $pathHandler = new PathHandler();
        $classReader = new ClassReader($pathHandler);

        echo self::DESC . PHP_EOL;
        echo self::QUIT_MESSAGE . PHP_EOL;

        for($i = 0; true; $i++) {
            $input = readline(self::INPUT);

            if(preg_match_all('/list/iu', $input) || preg_match_all('/help/iu', $input)) {
                Decorator::getTaskBorder($classReader->list);
            } else {
                ObjectManager::create($input);
            }
        }
    }
}