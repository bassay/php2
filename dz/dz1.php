<?php

use \Doctrine\Common\ClassLoader;
use \my\package\Class_Name;
//use \my\package_name\Class_Name;

spl_autoload_register(function ($class) {
  // замена _ на "разделитель папок" в имени файла! дз часть 2
  $class = str_replace('_', DIRECTORY_SEPARATOR,
              end(
          explode("\\", $class)
              )
          ) . ".php";

  // дз часть 1
  $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
  if (file_exists($file)) {
    require $file;
  }
});