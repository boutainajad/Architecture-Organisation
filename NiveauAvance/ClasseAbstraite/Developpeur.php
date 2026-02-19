<?php
namespace App\NiveauAvance\ClasseAbstraite;

class Developpeur extends Employe {
    private float $salaireFixe = 3000;

    public function calculerSalaire(): float {
        return $this->salaireFixe;
    }
}
