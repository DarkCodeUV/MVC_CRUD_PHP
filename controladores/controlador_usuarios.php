<?php

include_once("modelos/usuarios.php");
include_once("conexion.php");

BD::crearInstancia();

    class ControladorUsuarios{

        public function inicio(){

            $usuarios = Usuario::consultar();

            include_once("vistas/usuarios/inicio.php");
        }

        public function crear(){
            if($_POST){//Validamos que llegue la info del formulario
                //print_r($_POST);

                $nombre = $_POST['nombre'];
                $apellidoP = $_POST['apellidoP'];
                $apellidoM = $_POST['apellidoM'];
                $correo =$_POST['correo'];
                $contraseña =$_POST['contraseña'];
                $telefono =$_POST['telefono'];

                Usuario::crear($nombre, $apellidoP, $apellidoM, $correo, $contraseña, $telefono);
                
            }

            include_once("vistas/usuarios/crear.php");
        }
         
        public function editar(){
            //print_r($_GET);

            $id= $_GET['id'];
            $usuario=(Usuario::buscar($id));

            if($_POST){
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $apellidoP=$_POST['apellidoP'];
                $apellidoM=$_POST['apellidoM'];
                $correo=$_POST['correo'];
                $contraseña=$_POST['contraseña'];
                $telefono=$_POST['telefono'];
                
                
    
                Usuario::editar($id, $nombre, $apellidoP, $apellidoM, $correo, $contraseña, $telefono);
                header("Location:./?controlador=usuarios&&accion=inicio");
                //print_r($_POST);
            }
            include_once("vistas/usuarios/editar.php");
        }


        public function borrar(){
            //print_r($_GET);
            $id= $_GET['id'];
            
            Usuario::borrar($id);
            //Redericcionamos
            header("Location:./?controlador=usuarios&&accion=inicio");

        }

    }

?>