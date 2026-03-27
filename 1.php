<?php

abstract class Figura {
    abstract public function pole_pow();
}

interface Obliczenia {
    public function obwod();
}

interface Informowanie {
    public function wyswietl_obliczenia();
}

class Prostokat extends Figura implements Obliczenia, Informowanie {
    private $a;
    private $b;
    
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }
    
    public function pole_pow() {
        return $this->a * $this->b;
    }
    
    public function obwod() {
        return 2 * ($this->a + $this->b);
    }
    
    public function wyswietl_obliczenia() {
        echo "=== PROSTOKĄT ===<br>";
        echo "Bok a: " . $this->a . "<br>";
        echo "Bok b: " . $this->b . "<br>";
        echo "Pole: " . $this->pole_pow() . "<br>";
        echo "Obwód: " . $this->obwod() . "<br>";
    }
}

class Kolo extends Figura implements Obliczenia, Informowanie {
    private $r;
    const PI = M_PI;
    
    public function __construct($r) {
        $this->r = $r;
    }
    
    public function pole_pow() {
        return self::PI * $this->r * $this->r;
    }
    
    public function obwod() {
        return 2 * self::PI * $this->r;
    }
    
    public function wyswietl_obliczenia() {
        echo "=== KOŁO ===<br>";
        echo "Promień r: " . $this->r . "<br>";
        echo "Pole: " . $this->pole_pow() . "<br>";
        echo "Obwód: " . $this->obwod() . "<br>";
    }
}

$prostokat1 = new Prostokat(5, 3);
$kolo1 = new Kolo(4);

$prostokat1->wyswietl_obliczenia();
$kolo1->wyswietl_obliczenia();

?>