<?php
/**
 * Created by PhpStorm.
 * User: Apxat
 * Date: 20.12.2018
 * Time: 7:34
 */

namespace app\controllers;

use app\models\AppModel;
use ishop\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }
}