<?php

require_once 'Produit.php';
require_once 'Commande.php';

use App\NiveauMoyen\Composition\Produit;
use App\NiveauMoyen\Composition\Commande;

$produit1 = new Produit("Clavier", 150);
$produit2 = new Produit("Souris", 80);
$produit3 = new Produit("Ecran", 1200);

$commande = new Commande();

$commande->ajouterProduit($produit1);
$commande->ajouterProduit($produit2);
$commande->ajouterProduit($produit3);

echo "Total HT : " . $commande->calculerTotal() . "\n";
echo "Total TTC : " . $commande->calculerTotalTTC() . "\n";
