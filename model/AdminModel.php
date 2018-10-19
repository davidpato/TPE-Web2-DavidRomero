<?php

class AdminModel
{
  private $db;

  function __construct() {

      $this->db = $this->Connect();
  }

  function Connect() {
    return new PDO('mysql:host=localhost;'
         .'dbname=db_discografia;charset=utf8'
         , 'root', '');
  }
  function GetDiscos() {
      $sentencia = $this->db->prepare( "select * from disco");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetDisco($id){

      $sentencia = $this->db->prepare( "select * from disco where id=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function InsertarDisco($nombre,$descripcion) {
      $sentencia = $this->db->prepare("INSERT INTO disco(nombre,descripcion) VALUES(?,?)");
      $sentencia->execute(array($nombre,$descripcion));
  }

  function BorrarDisco($idTarea) {
      $sentencia = $this->db->prepare( "delete from disco where id=?");
      $sentencia-> execute(array($idTarea));
  }

  function GuardarEditarDisco($titulo,$descripcion,$id){
    $sentencia = $this->db->prepare( "update disco set nombre = ?, descripcion = ? where id=?");
    $sentencia->execute(array($titulo,$descripcion,$id));
  }

  function GetCanciones() {
      $sentencia = $this->db->prepare( "select c_id,c_nombre,c_duracion,nombre from cancion inner join disco on cancion.c_disco=disco.id order by id=disco.id");
      //$sentencia = $this->db->prepare( "select * from cancion");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetCancion($id) {
      $sentencia = $this->db->prepare( "select * from cancion where c_id=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function InsertarCancion($nombre,$duracion,$disco) {
      $sentencia = $this->db->prepare("INSERT INTO cancion(c_nombre,c_duracion,c_disco) VALUES(?,?,?)");
      $sentencia->execute(array($nombre,$duracion,$disco));
  }

  function BorrarCancion($idCancion) {
      $sentencia = $this->db->prepare( "delete from cancion where c_id=?");
      $sentencia-> execute(array($idCancion));
  }

  function GetDatos() {
      $sentencia = $this->db->prepare("select * from disco");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GuardarEditarCancion($titulo,$duracion,$disco,$id){
    $sentencia = $this->db->prepare( "update cancion set c_nombre = ?, c_duracion = ?, c_disco = ? where c_id=?");
    $sentencia->execute(array($titulo,$duracion,$disco,$id));
  }

  function InsertarUsuario($nombre, $hash){

    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, pass) VALUES(?,?)");
    $sentencia->execute(array($nombre, $hash));
  }
}
 ?>
