<?php
/**
 * Created by PhpStorm.
 * User: Apxat
 * Date: 18.12.2018
 * Time: 7:55
 */

namespace ishop;


trait TSingletone
{
    private static $instance;

    public static function instance(){
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
}