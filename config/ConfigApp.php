<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('DISCOS', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/discos');
define('CANCIONES', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/canciones');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
define('ADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/admin');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'HomeController#Home',
      'home'=> 'HomeController#Home',
      'discos' => 'DiscosController#Home',
      'mostrarUsuarios'=> 'UsuarioController#MostrarUsuario',
      'login' =>'LoginController#login',
      'logout' =>'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin',
      'base' => 'BaseController#Base',
      'canciones' => 'CancionesController#Home',
      'admin' => 'AdminController#Home',
      'borrardisco' => 'AdminController#BorrarDisco',
      'agregar' =>'AdminController#InsertDisco',
      'editardisco' => 'AdminController#EditarDisco',
      'guardareditardisco' => 'AdminController#GuardarEditarDisco',
      'borrarcancion' => 'AdminController#BorrarCancion',
      'insertarcancion' => 'AdminController#InsertCancion',
      'SeleccionarCategoria' => 'AdminController#SeleccionarCategoria',
      'editarcancion'=> 'AdminController#EditarCancion',
      'guardareditarcancion'=> 'AdminController#GuardarEditarCancion',
      'agregarusuario'=> 'AdminController#InsertUsuario',
    ];

}

 ?>
