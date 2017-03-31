<?php
/**
 * Created by PhpStorm.
 * User: German
 * Date: 31.03.2017
 * Time: 17:13
 */

namespace vendor\core\base;


abstract class Controller
{
    public $route = [];
    public $view;

    public function __construct($route){
        $this->route = $route;
        //$this->view = $route['action'];
        //include APP . "/views/{$route['controller']}/{$this->view}.php";
    }
}