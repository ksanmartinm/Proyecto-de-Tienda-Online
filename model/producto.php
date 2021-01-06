<?php

    class Producto{
        private $id;
        private $categoria_id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $stock;
        private $oferta;
        private $fecha;
        private $imagen;
        private $db;

        public function __construct(){
            //Coneccion a la base de datos
            $this->db = Database::connect();
        }

    function getId()
    {
        return $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function getCategoria_id()
    {
        return $this->categoria_id;
    }

    function setCategoria_id($categoria_id)
    {
        $this->categoria_id = $categoria_id;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getDescripcion()
    {
        return $this->descripcion;
    }

    function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    function getPrecio()
    {
        return $this->precio;
    }

    function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    function getStock()
    {
        return $this->stock;
    }

    function setStock($stock)
    {
        $this->stock = $stock;
    }

    function getOferta()
    {
        return $this->oferta;
    }

    function setOferta($oferta)
    {
        $this->oferta = $oferta;
    }

    function getFecha()
    {
        return $this->fecha;
    }

    function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    function getImagen()
    {
        return $this->imagen;
    }

    function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");
        
        return $productos;
    }

    }