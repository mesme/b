<?php

require_once 'vendor/autoload.php';

session_start();

use Bee\PHP\Test\Service\Api;


$api = new Api($_SESSION);


if (isset($_GET['hit'])) {
    $api->play();
} else {
    $api->endGame();
} ?>

<?php
$api->showPoints();
?>


<a href="/?hit=1">Hit</a>