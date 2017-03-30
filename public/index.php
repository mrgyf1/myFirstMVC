<?php
/**
 * Created by PhpStorm.
 * User: German
 * Date: 30.03.2017
 * Time: 11:29
 */
$query = rtrim($_SERVER['QUERY_STRING'], '/');

require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';
require '../app/contollers/Main.php';
require '../app/contollers/Posts.php';

Router::add('^$', ['contoller'=>'Main', 'action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

debug(Router::getRoutes());

Router::dispatch($query);

Router::dispatch
