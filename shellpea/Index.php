<?php

namespace shellpea;

require 'bootstrap.php';

class Index extends Base
{

    public function __CONSTRUCT()
    {
        $this->base = new Base();
        parent::__construct();
    }

    public function setWelcome(){
        echo $this->base->setHeader('Это чертов твиттер</br>Ох намучался же я!');
        return $this->base->setUrl('Controller/', 3);
    }


}
$index = new Index();
$index->setWelcome();