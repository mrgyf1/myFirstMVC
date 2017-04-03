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
    public $layout;
    public $vars = []; // Пользовательские данные

    public function __construct($route){
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView(){
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->vars);
    }
    public function set($vars){
        $this->vars = $vars;
    }
}