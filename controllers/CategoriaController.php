<?php

require_once 'model/categoria.php';
require_once 'model/producto.php';

class CategoriaController{
    public function index(){
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        
        require_once 'views/categoria/index.php';
    }

    public function ver(){
        if(isset($_GET['id'])){
            //Coseguir la categoria
            $id = $_GET['id'];
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();

            //Coseguir productos
            $producto = new Producto();
            $producto->setCategoria_id($id);
            $productos = $producto->getAllCategoria();
        }

        require_once "views/categoria/ver.php";
    }

    public function crear(){
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    public function save(){
        Utils::isAdmin();
        
        if(isset($_POST) && isset($_POST['nombre'])){
            //guardar la categoria en la bdd
            $categoria = new Categoria();
            $categoria->setNombre($_POST['nombre']);
            $categoria->save();
        }
        

        header("Location:".base_url."categoria/index");
    }
}

?>