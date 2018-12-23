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
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);

        $title = "Главная страница";
        $desc = "Это главная страница крупшейшего интернет магазина";
        $keywords = "главная, интернет-магазин, часы, сумки, отличные цены";

        $this->setMeta($title, $desc, $keywords);

        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane', 'Mike'];
        $cache = Cache::instance();
        $cache->delete('test');
        $cache->set('test', $names);
        $data = $cache->get('test');
        if(!$data){
            $cache->set('test', $names);
        }
        debug($data);
        $this->set(compact('name','age', 'names', 'posts'));

    }
}