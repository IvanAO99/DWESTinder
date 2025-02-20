<?php

namespace App\Controladores;

use App\Clases\Usuario;
use App\Modelos\UsuarioModelo;

class UsuarioControlador
{
    public function getUsuario(int $id){
        echo "Los datos del usuario $id";
    }

    public function getTodosLosUsuarios(){
        echo "Estoy en todos los usuaarios";

    }

    public function modificarUsuario(int $id){
        echo "Voy a modificar el usuario $id";
    }

    public function guardarUsuario(){
        $usuario = new Usuario();
        $usuario->setNombre($_POST['nombre']);
        $usuario->setApellidos($_POST['apellidos']);
        $usuario->setEmail($_POST['correo']);

        UsuarioModelo::guardarUsuarioBD($usuario);

    }

    public function borrarUsuario(int $idUsuario){
        echo "Vamos a borrar un usuario, concretamente el usuario $idUsuario";

    }

    //Métodod de respuesta de la API

    public function mostrarUsuariosAPI(){
        echo "{
               correo:migueltomas@iespacomolla.es,
               nombre:miguel,
               apellidos:tomas
              }
        ";
    }

    public function borrarUsuarioAPI(int $idUsuario){
        echo "Hemos borrado el usuario $idUsuario mediante la API";
    }

    public function guardarUsuarioAPI(){
        $usuario = new Usuario();
        $usuario->setNombre($_POST['nombre']);
        $usuario->setApellidos($_POST['apellidos']);
        $usuario->setEmail($_POST['correo']);

        UsuarioModelo::guardarUsuarioBD($usuario);
    }

}