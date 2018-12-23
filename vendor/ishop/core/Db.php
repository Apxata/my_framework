<?php
/**
 * Created by PhpStorm.
 * User: Apxat
 * Date: 22.12.2018
 * Time: 9:26
 */

namespace ishop;

class Db
{
    use TSingletone;

    protected function __construct()
    {
        $db = require_once CONF . '/config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if(!\R::testConnection()) {
            throw new \Exception("Нет соедениня с БД", 500);
        }
        \R::freeze(true);
        if(DEBUG) {
            \R::debug(true, 1);
        }
    }

}