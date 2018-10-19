<?php

require_once "./view/AdminView.php";
require_once "./model/AdminModel.php";
require_once "SecuredController.php";

class AdminController extends SecuredController
  {
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

      $this->view = new AdminView();
      $this->model = new AdminModel();
      $this->Titulo = "Administrador";
  }

  function Home() {
      $Discos = $this->model->GetDiscos();
      $Canciones = $this->model->GetCanciones();
      $Datos = $this->model->GetDatos();
      $this->view->Mostrar($this->Titulo,$Discos,$Canciones,$Datos);
  }

  function InsertDisco() {
    $titulo = $_POST["tituloForm"];
    $descripcion = $_POST["descripcionForm"];

    $this->model->InsertarDisco($titulo,$descripcion);

    header(ADMIN);
  }

  function BorrarDisco($param){
    $this->model->BorrarDisco($param[0]);
    header(ADMIN);
  }

  function EditarDisco($param){
      $id_disco = $param[0];

      $Disco = $this->model->GetDisco($id_disco);
      $this->view->MostrarEditarDisco("Editar Disco", $Disco);
  }

  function GuardarEditarDisco(){
    $id_tarea = $_POST["idForm"];
    $titulo = $_POST["tituloForm"];
    $descripcion = $_POST["descripcionForm"];


    $this->model->GuardarEditarDisco($titulo,$descripcion,$id_tarea);

    header(ADMIN);
  }

  function InsertCancion() {
    $nombre = $_POST["nombreForm"];
    $duracion = $_POST["duracionForm"];
    $disco = $_POST["discoForm"];

    $this->model->InsertarCancion($nombre,$duracion,$disco);

    header(ADMIN);
  }

  function BorrarCancion($param){
    $this->model->BorrarCancion($param[0]);
    header(ADMIN);
  }

  function SeleccionarCategoria($param){
    $this->model->SelectCategoria($param[0]);
  }

  function EditarCancion($param){
      $Datos = $this->model->GetDatos();
      $id = $param[0];
      $Cancion = $this->model->GetCancion($id);
      $this->view->MostrarEditarCancion("Editar Cancion", $Cancion, $Datos);
  }

  function GuardarEditarCancion(){
    $id_tarea = $_POST["idForm"];
    $titulo = $_POST["nombreForm"];
    $descripcion = $_POST["duracionForm"];
    $disco = $_POST["discoForm"];

    $this->model->GuardarEditarCancion($titulo,$descripcion,$disco,$id_tarea);

    header(ADMIN);
  }

  function InsertUsuario(){
    $nombre = $_POST["nombreUser"];
    $pass = $_POST["passUser"];

    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $this->model->InsertarUsuario($nombre, $hash);
    header(ADMIN);
  }

}
 ?>
