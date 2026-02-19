<?php
require_once 'Animal.php';
require_once 'Chien.php';

use App\NiveauMoyen\Heritage\Chien;

$chien = new Chien("Rex");
echo $chien->sePresenter();
