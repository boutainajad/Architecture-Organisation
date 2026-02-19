<?php
namespace App\NiveauAvance\InterfacePaiement;

class Paypal implements PaiementInterface {
    public function payer(float $montant): bool {
        return true;
    }
}
