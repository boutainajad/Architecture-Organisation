<?php
namespace App\NiveauMoyen\Encapsulation;

class Cercle extends Forme {
    private float $rayon;

    public function __construct(float $rayon){
       
        $this->rayon = $rayon;
    }

    public function calculerAire(): float{
        return pi() * pow($this->rayon, 2);
    }
}
