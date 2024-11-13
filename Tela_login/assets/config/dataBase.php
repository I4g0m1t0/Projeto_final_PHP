<?php
require __DIR__ . '/../../../vendor/autoload.php';

use Kreait\Firebase\Factory;

$firebase = (new Factory)
    ->withServiceAccount(__DIR__ . '/../../../serviceAccountKey.json')
    ->withDatabaseUri('https://senacaluno-a0710-default-rtdb.firebaseio.com');

$database = $firebase->createDatabase();
?>
