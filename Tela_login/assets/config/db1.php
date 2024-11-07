<?php

require 'vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// Substitua pelo caminho do seu arquivo JSON de chave privada
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/path/to/serviceAccountKey.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri('https://senacaluno-a0710-default-rtdb.firebaseio.com')
    ->create();

$database = $firebase->getDatabase();
?>
