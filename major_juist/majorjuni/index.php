<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

$routes = array(
  'home' => array(
    'controller' => 'Home',
    'action' => 'home'
  ),
  'betaling' => array(
    'controller' => 'Betaling',
    'action' => 'betaling'
  ),
  'vragen' => array(
    'controller' => 'Vragen',
    'action' => 'vragen'
  ),
  'winkelmand' => array(
    'controller' => 'Betaling',
    'action' => 'winkelmand'
  ),
  'bedanking' => array(
    'controller' => 'Betaling',
    'action' => 'bedanking'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
