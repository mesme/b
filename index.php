<?php

require_once 'vendor/autoload.php';

session_start();

use Bee\PHP\Test\Model\Queen;
use Bee\PHP\Test\Model\Drone;
use Bee\PHP\Test\Model\Worker;

if(!isset($_SESSION['game_started']) || $_SESSION['game_started'] === false) {
    $queen = new Queen(100, 8);

    $workers = $drones = [];

    for ($i = 0; $i < 5; $i++) {
        $workers[] = new Worker(75, 10);
    }

    for ($j = 0; $j < 8; $j++) {
        $drones[] = new Drone(50, 12);
    }
    $_SESSION['queen'] = $queen;
    $_SESSION['workers'] = $workers;
    $_SESSION['drones'] = $drones;
}

if(isset($_GET['hit'])){
    $_SESSION['game_started'] = true;
} ?>

<table>
    <tr>
        <td>Type</td>
        <td>Total</td>
        <td>Remaining</td>
        <td>Alive?</td>
    </tr>

<?php if(!empty($_SESSION['queen'])) { ?>
    <tr>
        <td>Queen</td>
        <td><?=$_SESSION['queen']->life_points;?></td>
        <td><?=$_SESSION['queen']->getRemaining();?></td>
        <td><?=$_SESSION['queen']->alive;?></td>
    </tr>
<? } ?>
<?php if(!empty($_SESSION['workers'])) { ?>
    <?php foreach($_SESSION['workers'] as $worker) { ?>
        <tr>
            <td>Worker</td>
            <td><?=$worker->life_points;?></td>
            <td><?=$worker->getRemaining();?></td>
            <td><?=$worker->alive;?></td>
        </tr>
    <? } ?>
<? } ?>
<?php if(!empty($_SESSION['drones'])) { ?>
    <?php foreach($_SESSION['drones'] as $drone) { ?>
        <tr>
            <td>Drone</td>
            <td><?=$drone->life_points;?></td>
            <td><?=$drone->getRemaining();?></td>
            <td><?=$drone->alive;?></td>
        </tr>
    <? } ?>
<? } ?>
</table>
<a href="/?hit=1">Hit</a>