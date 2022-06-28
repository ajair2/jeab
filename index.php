<?php
  $ruta = !empty($_GET["url"]) ? $_GET["url"] : "Home/index";
  $array = explode("/", $ruta);
  $controller = $array[0];
  $metodo = "index";
  $parametro = "";

  # Cargar el método
  if (!empty($array[1])) {
    if (!empty($array[1] != "")) {
      $metodo = $array[1];
    }
  }

  # Cargar el parámetro
  if (!empty($array[2])) {
    if (!empty($array[2] != "")) {
      for ($i=2; $i < count($array); $i++) { 
        $parametro .= $array[$i] . ",";
      }
      # Quitar la última coma
      $parametro = trim($parametro, ",");
    }
  }

  # Directorio donde estaran todos los controladores
  $dirController = "Controllers" . "/" . $controller . ".php";

  if (file_exists($dirController)) {
    require_once $dirController;

    # Instanciar
    $controller = new $controller();
    if (method_exists($controller, $metodo)) {
      $controller->$metodo($parametro);

    } else {
      echo "No existe el Método";

    }
  } else {
    echo "No existe el Controlador";
  }