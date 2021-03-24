<?php
require_once 'model/producto.php';

class CarritoController{
    public function index(){
        var_dump($_SESSION['carrito']);
        echo "Controlador Pedido, Acción index";
    }

    public function add(){
        if(isset($_GET['id'])){
            $producto_id = $_GET['id'];
        }else{
            header('Location:' .base_url);
        }

        if(isset($_SESSION['carrito'])){

        }else{
             // Conseguir producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();

            if(is_object($producto)){
                $_SESSION['carrito'][] = array(
                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades" => 1,
                    "producto" => $producto
                );
            }
        }

        header("Location:".base_url."carrito/index");
    }

    public function remove(){

    }

    public function delete_all(){
        unset($_SESSION['carrito']);
        header("Location:".base_url."carrito/index");
    }
}

?>