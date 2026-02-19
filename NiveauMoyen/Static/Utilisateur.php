<?php
namespace App\NiveauMoyen\Static;

class Utilisateur {
    private string $nom;
    private string $email;
    private static int $compteur = 0;

    public function __construct(string $nom, string $email){
        $this->nom = $nom;
        $this->email = $email;
        self::$compteur++;
    }

    public static function getTotalUtilisateurs(): int {
        return self::$compteur;
    }
}
