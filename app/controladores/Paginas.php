<?php
    class Paginas extends Controlador{
        public function __construct(){
            $this->usuarioModelo = $this->modelo('Usuario');
        }

        // public function login(){
            
        //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //         $datos = [
        //             'user' => trim($_POST['user']),
        //             'pass' => trim($_POST['pass'])
        //         ];

        //         if ($this->usuarioModelo->validarUsuario($datos)) {
        //             redireccionar('/paginas');
        //         }else {
        //             die('Algo salio mal');
        //         }
        //     }else {
        //         $this->vista('paginas/inicio');
        //     }
        // }

        public function index(){

            //obtener los usuarios
            $usuarios = $this->usuarioModelo->obtenerUsuarios();

            $datos = [
                'usuarios' => $usuarios
            ];

            $this->vista('paginas/inicio', $datos);
        }

        public function agregar(){

            // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //     $datos = [
            //         'nombre' => trim($_POST['nombre']),
            //         'email' => trim($_POST['email']),
            //         'telefono' => trim($_POST['telefono'])
            //     ];

            //     if ($this->usuarioModelo->agregarUsuario($datos)) {
            //         redireccionar('/paginas');
            //     }else {
            //         die('Algo salio mal');
            //     }
            // }else{

                //obtener los datos
            $instituciones = $this->usuarioModelo->obtenerData('instituciones');
            $linea_inv = $this->usuarioModelo->obtenerData('linea_inv');
                $datos = [
                    
                    'instituciones' => $instituciones,
                    'linea_inv' => $linea_inv
                ];

                $this->vista('paginas/agregar', $datos);
            }

        

        public function editar($id){

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'id_usuario' => $id,
                    'nombre' => trim($_POST['nombre']),
                    'email' => trim($_POST['email']),
                    'telefono' => trim($_POST['telefono'])
                ];

                if ($this->usuarioModelo->actualizarUsuario($datos)) {
                    redireccionar('/paginas');
                }else {
                    die('Algo salio mal');
                }
            }else{

                //Obtener informacion de usuario desde el modelo
                $usuario = $this->usuarioModelo->obtenerUsuarioId($id);

                $datos = [
                    'id_usuario' => $usuario->id_usuario,
                    'nombre' => $usuario->nombre,
                    'email' => $usuario->email,
                    'telefono' => $usuario->telefono
                ];

                $this->vista('paginas/editar', $datos);
            }

        }

        public function borrar($id){

            //Obtener informacion de usuario desde el modelo
            $usuario = $this->usuarioModelo->obtenerUsuarioId($id);

            $datos = [
                'id_usuario' => $usuario->id_usuario,
                'nombre' => $usuario->nombre,
                'email' => $usuario->email,
                'telefono' => $usuario->telefono
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'id_usuario' => $id
                ];

                if ($this->usuarioModelo->borrarUsuario($datos)) {
                    redireccionar('/paginas');
                }else {
                    die('Algo salio mal');
                }
            }
            $this->vista('paginas/borrar', $datos);
        }

    }
?>