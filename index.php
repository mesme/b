<?php

require_once 'vendor/autoload.php';

session_start();

use Bee\PHP\Test\Model\Queen;
use Bee\PHP\Test\Model\Drone;
use Bee\PHP\Test\Model\Worker;

$queen = new Queen(100,8);

$workers = $drones = [];

for($i = 0; $i < 5; $i++){
    $workers[] = new Worker(75,10);
}

for($j = 0; $j < 8; $j++){
    $drones[] = new Drone(50,12);
}
echo '<pre>';
print_r($workers);
print_r($drones);
echo '</pre>';

if(isset($_GET['hit'])){

}

echo '<a href="/?hit=1">Hit</a>';