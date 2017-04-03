<?php

/**
 * Created by PhpStorm.
 * User: German
 * Date: 30.03.2017
 * Time: 15:12
 */
namespace app\controllers;

class PostsNew extends App
{
    public function indexAction(){
        echo 'PostsNew::index';
    }
    public function testAction(){
        echo 'PostsNew::test';
    }
    public function testPageAction(){
        echo 'PostsNew::testPage';
    }
    public function before(){
        echo 'PostsNew::before';
    }
}