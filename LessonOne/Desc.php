<?php
/*
 * Class contains description
 */
namespace Shellpea;

use Shellpea\DeskInterface;
use Shellpea\TaskInterface;

abstract class Desc implements DeskInterface, TaskInterface
{
    static public function getMenu()
    {
        echo self::DESC. PHP_EOL;

        for($i = 0; true; $i++) {
            echo ($i != 1) ? self::QUIT_MESSAGE . PHP_EOL : PHP_EOL;

            $taskName = readline('введите имя задачи к которой нужно перейти: ');
//
//            if(preg_match_all('%[lL]ist%', $taskName)) {
//                print_r(self::$tasks);
//            }

//            self::getClassesList();
            self::objectManager($taskName);
        }
    }

    static private function objectManager(string $class)
    {
        if(class_exists($class)) {
            $class = new $class;
            $class->foo();
        }

        echo self::MISSING_TASK_MESSAGE;
    }

    static private function getClassesList(): array
    {

        $classList = glob('LessonOne/[a-zA-Z+]*');

        foreach($classList as $taskName) {
            $taskName = 'Shellpea\\'. $taskName;
            $taskName = preg_replace('/\//', '\\', $taskName, -1);
            substr_replace($taskName , '', strrpos($taskName , '.'));
            print_r($taskName);
            $list[] = $taskName;
        }
        print_r($list);
        die;
    }
}