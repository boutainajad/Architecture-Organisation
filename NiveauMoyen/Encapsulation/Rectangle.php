<?php
namespace App\NiveauMoyen\Encapsulation;

class Rectangle extends Forme {
    private float $largeur;
    private float $hauteur;

    public function __construct(float $largeur, float $hauteur){
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function calculerAire(): float{
        return $this->largeur * $this->hauteur;
    }
}
