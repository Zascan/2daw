<?php
    declare(strict_types=1);

    class Persona {
        private string $nombre;

        public function __construct(string $nombre) {
            $this->nombre = $nombre; 
        }

        public function imprimir(): void {
            echo "Mi nombre es " . $this->nombre;
        }
    }

    $persona1 = new Persona("Juan");

    $persona1->imprimir();
?>