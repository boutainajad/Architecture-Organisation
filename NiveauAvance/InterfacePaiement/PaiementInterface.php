<?php
namespace App\NiveauAvance\InterfacePaiement;

interface PaiementInterface {
    public function payer(float $montant): bool;
}
