<?php

require_once 'Employe.php';
require_once 'Commercial.php';
require_once 'Developpeur.php';

use App\NiveauAvance\ClasseAbstraite\Commercial;
use App\NiveauAvance\ClasseAbstraite\Developpeur;

$commercial = new Commercial("Alice", 500); 
$developpeur = new Developpeur("Bob");      
echo $commercial->getInfos() . "\n";
echo "Salaire Commercial: " . $commercial->calculerSalaire() . " €\n\n";

echo $developpeur->getInfos() . "\n";
echo "Salaire Developpeur: " . $developpeur->calculerSalaire() . " €\n\n";

$employes = [$commercial, $developpeur];
foreach($employes as $employe){
    echo $employe->getInfos() . " - Salaire : " . $employe->calculerSalaire() . " €\n";
}
