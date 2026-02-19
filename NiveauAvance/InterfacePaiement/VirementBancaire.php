<?php
namespace App\NiveauAvance\InterfacePaiement;

class VirementBancaire implements PaiementInterface {
    public function payer(float $montant): bool {
        return true;
    }
}
