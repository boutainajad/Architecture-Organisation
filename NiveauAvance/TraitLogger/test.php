<?php

require_once 'LoggerTrait.php';

use App\NiveauAvance\TraitLogger\LoggerTrait;

class Application {
    use LoggerTrait;
}

class Service {
    use LoggerTrait;
}

$app = new Application();
$service = new Service();

$app->log("Demarrage de l'application");
$app->log("Utilisateur connecté");

$service->log("Service initialise");
$service->log("Requête traitée");

echo "Logs Application:\n";
print_r($app->getLogs());

echo "\nLogs Service:\n";
print_r($service->getLogs());
