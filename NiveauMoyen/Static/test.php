<?php

require_once 'Utilisateur.php';
require_once 'Admin.php';

use App\NiveauMoyen\Static\Utilisateur;
use App\NiveauMoyen\Static\Admin;

$user1 = new Utilisateur("Alice", "alice@example.com");
$user2 = new Utilisateur("Bob", "bob@example.com");

$admin1 = new Admin("Charlie", "charlie@example.com", 1);
$admin2 = new Admin("Diana", "diana@example.com", 2);

echo "Total utilisateurs : " . Utilisateur::getTotalUtilisateurs() . "\n";

echo "Total utilisateurs via Admin : " . Admin::getTotalUtilisateurs() . "\n";
