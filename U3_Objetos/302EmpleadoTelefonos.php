<?php
    declare(strict_types=1);
    class Empleado {
        private string $nombre;
        private string $apellidos;
        private float $sueldo;
        private $telefonos = array();

        public function __construct(string $nombre, string $apellidos, float $sueldo) {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->sueldo = $sueldo;
        }

        public function getNombre(): string {
            return $this->nombre;
        }
        public function getApellidos(): string {
            return $this->apellidos;
        }
        public function getSueldo(): float {
            return $this->sueldo;
        }

        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }
        public function setApellidos(string $apellidos): void {
            $this->apellidos = $apellidos;
        }
        public function setSueldo(float $sueldo): void {
            $this->sueldo = $sueldo;
        }

        public function getNombreCompleto(): string {
            return $this->nombre . " " .$this->apellidos;
        }

        public function debePagarImpuestos(): bool {
            return $this->sueldo > 3333;
        }

        public function aniadirTelefono(int $tel) : void {
            array_push($this->telefonos, $tel);
        }

        public function listarTelefonos(): string {
            $res="";
            foreach($this->telefonos as $telefono){
                $res=$res . $telefono . ", ";
            }
            return $res;
        }

        public function vaciarTelefonos(): void{
            $this->telefonos = array();
        }
    }

    $em1=new Empleado("Daniel", "Lorca",4500);
    $em1->aniadirTelefono(666333888);
    $em1->aniadirTelefono(662778330);
    echo $em1->listarTelefonos();

    
?>