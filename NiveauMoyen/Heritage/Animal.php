<?php
namespace App\NiveauMoyen\Heritage;

class Animal {
    protected string $nom;

    public function __construct(string $nom){
        $this->nom = $nom;
    }

    public function faireDuBruit(): string {
        return "Bruit";
    }

    public function sePresenter(): string {
        return "Je suis {$this->nom} et je fais " . $this->faireDuBruit();
    }
}
