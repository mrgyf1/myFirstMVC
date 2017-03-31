<?php
/**
 * Created by PhpStorm.
 * User: German
 * Date: 31.03.2017
 * Time: 17:18
 */

namespace app\controllers;


use vendor\core\base\Controller;

class Page extends Controller
{
    public function viewAction(){
        debug($this->route);
        echo 'Posts::index';
    }
}