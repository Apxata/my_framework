<?php
/**
 * Created by PhpStorm.
 * User: Apxat
 * Date: 22.12.2018
 * Time: 9:16
 */

namespace ishop\base;

use ishop\Db;

abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        Db::instance();
    }
}