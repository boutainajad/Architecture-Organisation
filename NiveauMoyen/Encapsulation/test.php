<?php

require_once 'Forme.php';
require_once 'Cercle.php';
require_once 'Rectangle.php';

use App\NiveauMoyen\Encapsulation\Cercle;
use App\NiveauMoyen\Encapsulation\Rectangle;

$cercle = new Cercle(5);
echo "Aire du cercle : " . $cercle->calculerAire() . "\n";

$rectangle = new Rectangle(4, 6);
echo "Aire du rectangle : " . $rectangle->calculerAire() . "\n";


