<?php

require_once "./view/CancionesView.php";
require_once "./model/CancionesModel.php";

class CancionesController
  {
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {

      $this->view = new CancionesView();
      $this->model = new CancionesModel();
      $this->Titulo = "Canciones";
  }

  function Home() {
      $Canciones = $this->model->GetCanciones();
      $Datos = $this->model->GetDatos();
      $this->view->Mostrar($this->Titulo, $Canciones, $Datos);
  }

}
 ?>
