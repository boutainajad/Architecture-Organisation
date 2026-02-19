<?php
namespace App\NiveauMoyen\Static;

class Admin extends Utilisateur {
    private int $niveauAcces;

    public function __construct(string $nom, string $email, int $niveauAcces){
        parent::__construct($nom, $email);
        $this->niveauAcces = $niveauAcces;
    }
}
