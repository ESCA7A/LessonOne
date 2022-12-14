<?php
/*
 * Class contains description
 */
namespace Shellpea;

use Shellpea\DeskInterface;
use Shellpea\TaskInterface;
use Engine\ClassReader;
use Engine\ObjectManager;

abstract class Desc implements DeskInterface, TaskInterface
{
    static public function getMenu()
    {
        echo self::DESC. PHP_EOL;

        for($i = 0; true; $i++) {
            echo ($i != 1) ? self::QUIT_MESSAGE . PHP_EOL : PHP_EOL;

            $input = readline('введите имя задачи к которой нужно перейти: ');

            if(preg_match_all('%[lL]ist%', $input)) {
                $engine = new ClassReader(new \Engine\PathHandler());
                print_r($engine->list);
            } else {
                ObjectManager::create($input);
            }
        }
    }
}