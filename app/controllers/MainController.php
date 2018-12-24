<?php
/**
 * Created by PhpStorm.
 * User: Apxat
 * Date: 19.12.2018
 * Time: 8:29
 */

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController
{

    public function indexAction(){
        $title = "Главная страница";
        $desc = "Это главная страница крупшейшего интернет магазина";
        $keywords = "главная, интернет-магазин, часы, сумки, отличные цены";

        $this->setMeta($title, $desc, $keywords);


    }
}