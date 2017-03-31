<?php

/**
 * Created by PhpStorm.
 * User: German
 * Date: 30.03.2017
 * Time: 15:08
 */
namespace app\controllers;

use vendor\core\base\Controller;

class Posts extends Controller
{

    public function indexAction(){
        echo 'Posts::index';
    }
    public function testAction(){
        debug($this->route);
        echo 'Posts::test';
    }
}