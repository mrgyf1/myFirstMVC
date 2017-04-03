<?php

/**
 * Created by PhpStorm.
 * User: German
 * Date: 30.03.2017
 * Time: 15:08
 */

namespace app\controllers;

class Main extends App
{
    public $layout = 'main';

    public function indexAction(){
        //$this->layout = false;
        //$this->view = 'test';
        $name = 'German';
        $this->set(['name'=> $name, 'hi'=>'hello!']);
    }
}