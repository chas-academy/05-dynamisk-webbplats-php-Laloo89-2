<?php
  use Myblog\Core\Router;
  use Myblog\Core\Request; 

  function autoloader($classname) 
  {
    $lastSlash = strpos($classname, '\\') +1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename =__DIR__ . '/src/' . $directory . '.php';
    require_once($filename);
  }

  spl_autoload_register('autoloader');
 
  $router = new Router();
  $response = $router->route(new Request());

  include_once("templates/header.html");
  include_once("templates/navigation.php");
     echo $response;
  include_once("templates/footer.html");
  include_once("views/layout.php");  
 