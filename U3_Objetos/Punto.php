<?php
    class Punto {
        
        public function __construct(
            protected float $x = 0.0,
            protected float $y = 0.0,
            protected float $z = 0.0
        ) {}

        public function getX(): float {
            return $this->x;
        }
    }

    $p = new Punto(5);

    echo $p->getX();
?>