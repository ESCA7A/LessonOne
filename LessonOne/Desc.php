<?php

namespace Shellpea;

use Engine\ClassReader;
use Engine\ObjectManager;

abstract class Desc implements DeskInterface, TaskInterface
{
    const INPUT = PHP_EOL . 'введите имя задачи к которой нужно перейти: ';

    static public function getMenu()
    {
        echo self::DESC. PHP_EOL;

        for($i = 0; true; $i++) {
            echo ($i != 1) ? self::QUIT_MESSAGE : PHP_EOL;

            $input = readline(self::INPUT);

            if(preg_match_all('%[lL]ist%', $input)) {

                $engine = new ClassReader(new \Engine\PathHandler());
                print_r($engine->list);
            } else {
                ObjectManager::create($input);
            }
        }
    }
}