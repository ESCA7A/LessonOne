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

        echo DeskInterface::DESCRIPTION . PHP_EOL;
        echo DeskInterface::QUIT_MESSAGE;
        echo DeskInterface::HELP_MESSAGE;

        for ($i = 0; true; $i++) {
            $input = readline(self::INPUT);

            if (preg_match_all('/list/iu', $input) || preg_match_all('/help/iu', $input)) {
                Decorator::getTaskBorder($classReader->list);
                echo DeskInterface::HELP_MESSAGE;
            } else {
                $input = $pathHandler->setFirstToUpper($input);
                ObjectManager::create($input);
            }

            if ($i % 3 == 0) {
                echo DeskInterface::HELP_MESSAGE;
            }
        }
    }
}