<?php

namespace shellpea;

require 'bootstrap.php';

class Base
{
    CONST STYLE = "<html><link rel='stylesheet' href='View/Styles/Stylesheets.css'></html>";

    public function __CONSTRUCT()
    {
        print Base::STYLE;
    }

    /**
     * Set header
     * @param $header
     * @return string
     */
    protected function setHeader($header) :string{
        return "<h1 align='center'> $header </h1>";
    }

    /**
     * Example setUrl('My/Path/Must/Be/Here/')
     * @dir shellpea/Controller/Someindex.php - is real path
     * We use in method relative path without "shellpea" as Controller/
     * On condition that "my/path/" have Index.php or index.php
     * Else use real path without "shellpea"
     * @param $url
     * @return string
     */
    protected function setUrl($url, $time = 0)//:string {
    {
        $SERVER_NAME = $_SERVER['SERVER_NAME'];
        echo "<head><meta http-equiv='refresh' content='$time;URL=http://$SERVER_NAME/$url' /></head>";
    }
}