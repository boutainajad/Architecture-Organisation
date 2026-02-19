<?php
namespace App\NiveauAvance\InterfacePaiement;

class Stripe implements PaiementInterface {
    public function payer(float $montant): bool {
        return true;
    }
}
