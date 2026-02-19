<?php

require_once 'PaiementInterface.php';
require_once 'Paypal.php';
require_once 'Stripe.php';
require_once 'VirementBancaire.php';
require_once 'ServicePaiement.php';

use App\NiveauAvance\InterfacePaiement\Paypal;
use App\NiveauAvance\InterfacePaiement\Stripe;
use App\NiveauAvance\InterfacePaiement\VirementBancaire;
use App\NiveauAvance\InterfacePaiement\ServicePaiement;

$paypal = new Paypal();
$stripe = new Stripe();
$virement = new VirementBancaire();

$servicePaypal = new ServicePaiement($paypal);
echo "Paiement via Paypal: " . ($servicePaypal->effectuerPaiement(100) ? "Réussi" : "Échoué") . "\n";

$serviceStripe = new ServicePaiement($stripe);
echo "Paiement via Stripe: " . ($serviceStripe->effectuerPaiement(200) ? "Réussi" : "Échoué") . "\n";

$serviceVirement = new ServicePaiement($virement);
echo "Paiement via Virement: " . ($serviceVirement->effectuerPaiement(300) ? "Réussi" : "Échoué") . "\n";
