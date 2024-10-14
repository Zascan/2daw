<?php
    class Producto {
        const IVA = 0.23;
        private $codigo; 
        private static $numProductos = 0;

        public function __construct($codigo) {
            $this->codigo = $codigo;
            self::$numProductos++;
        }

        public static function nuevoProducto() {
            self::$numProductos++;
        }

        public function mostrarResumen(): void {
            echo "El producto " . $this->codigo . " y hay " . self::$numProductos . " productos."; 
        }
    }

    $prod1 = new Producto("Peras");
    $prod2 = new Producto("Limones");
    $prod3 = new Producto("Fresas");

    $prod2->mostrarResumen();
?>