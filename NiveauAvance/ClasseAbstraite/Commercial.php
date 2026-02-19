<?php
namespace App\NiveauAvance\ClasseAbstraite;

class Commercial extends Employe {
    private float $salaireFixe = 2000;
    private float $commission;

    public function __construct(string $nom, float $commission){
        parent::__construct($nom);
        $this->commission = $commission;
    }

    public function calculerSalaire(): float {
        return $this->salaireFixe + $this->commission;
    }
}
