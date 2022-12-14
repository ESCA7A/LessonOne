<?php

namespace Shellpea;

use Engine\ClassReader;
use Engine\ObjectManager;

abstract class Desc implements DeskInterface, TaskInterface
{
    const INPUT = PHP_EOL . 'введите имя задачи к которой нужно перейти: ';

    static public function getMenu()
    {
        echo self::DESC . PHP_EOL;
        self::QUIT_MESSAGE . PHP_EOL;

        for($i = 0; true; $i++) {
            $input = readline(self::INPUT);

            if(preg_match_all('/list/iu', $input)) {

                $classes = new ClassReader(new \Engine\PathHandler());
                Decorator::getTaskBorder($classes->list);
            } else {
                ObjectManager::create($input);
            }
        }
    }
}