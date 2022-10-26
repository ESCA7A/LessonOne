<?php

namespace Shellpea\TaskTwo;

class Task extends \Shellpea\Desc
{
    public $accept = "подходит";
    public $alert = "не подходит";
    public function foo(){
        echo self::TASK_TWO;
        $age = readline("How old are you: ");
        return $age >= 25 && $age <= 40 ? $this->accept : $this->alert;
    }
    public function result(){
        $res = $this->foo();
        if ($res === $this->accept || $res === $this->alert) {echo "\n$res";}
    }
}

$emp = new Task(); $emp->result();