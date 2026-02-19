<?php
namespace App\NiveauAvance\InterfacePaiement;

class ServicePaiement {
    private PaiementInterface $paiement;

    public function __construct(PaiementInterface $paiement){
        $this->paiement = $paiement;
    }

    public function effectuerPaiement(float $montant): bool {
        return $this->paiement->payer($montant);
    }
}
