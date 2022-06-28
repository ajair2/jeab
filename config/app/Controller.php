<?php
  class Controller {
    public function __construct() {
      $this-> view = new Views();
      $this-> cargarModel();
    }
    
    public function cargarModel() {
      $model = get_class($this)."Model";
      $ruta = "models/" . $model . ".php";

      if (file_exists($ruta)) {
        require_once $ruta;

        # instanciar el modelo
        $this->model = new $model();
      }
    }
  }