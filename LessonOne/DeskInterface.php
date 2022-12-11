<?php

namespace Shellpea;

interface DeskInterface
{
    const DESC =
        "здесь собраны ответы на 18 задач в рамках обучающего курса". PHP_EOL .
        "course organisation: @shellpea <https://shellpea.com>". PHP_EOL .
        "student: @esca7a - Pavel Tankov <pasha.esca1a@gmail.com>". PHP_EOL . PHP_EOL .
        "\t *** что бы посмотреть список задач, введите <list> ***". PHP_EOL;

    const QUIT_MESSAGE = "\t *** вы всегда можете закрыть программу сочетанием клавиш <ctrl + c> ***". PHP_EOL;

    const MISSING_TASK_MESSAGE =
        "+------------------------------------------------------------------------------------------------------+". PHP_EOL .
        "| Такого задания нет. Скопируйте имя задания полностью. Это выглядит примерно: <Shellpea\Task\TaskName>|". PHP_EOL .
        "+------------------------------------------------------------------------------------------------------+". PHP_EOL;
}