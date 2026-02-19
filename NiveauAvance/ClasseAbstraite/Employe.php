<?php
namespace App\NiveauAvance\ClasseAbstraite;

abstract class Employe {
    protected string $nom;

    public function __construct(string $nom){
        $this->nom = $nom;
    }

    abstract public function calculerSalaire(): float;

    public function getInfos(): string {
        return "Employé : {$this->nom}";
    }
}
