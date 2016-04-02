<?php

namespace App;

use SON\Init\Bootstrap;

class init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
        $ar['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
        $this->setRoutes($ar);
    }

    static public function getDb()
    {
        $db = new \PDO("mysql:host=localhost;dbname=mvc", "root", "");
        return $db;
    }
}