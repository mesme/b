<?php

require_once 'vendor/autoload.php';

use Bee\PHP\Test\Model\Bee;
use Bee\PHP\Test\Contract\Type;

session_start();

if (!isset($_SESSION['game_started']) || $_SESSION['game_started'] === false) {

    $bees = [];

    $bees[] = new Bee(100, 8, new Type('Queen'));

    for ($i = 0; $i < 5; $i++) {
        $bees[] = new Bee(75, 10, new Type('Worker'));
    }

    for ($j = 0; $j < 8; $j++) {
        $bees[] = new Bee(50, 12, new Type('Drone'));
    }
    $_SESSION['bees'] = $bees;

}


if (isset($_GET['hit'])) {

    $_SESSION['game_started'] = true;
    $random = array_rand($_SESSION['bees']);

    if ($_SESSION['bees'][$random]->getType()->getName() === 'Queen') {
        exit("<a href=\"/\">Game Over!, Play Again?</a>");
    }

    $alive = $_SESSION['bees'][$random]->hit();

    if ($alive === false) {
        unset($_SESSION['bees'][$random]);
    }

} else {
    session_destroy();
} ?>

<?php
echo '<table>
                <tr>
                    <td>Type</td>
                    <td>Total</td>
                    <td>Remaining</td>
                    <td>Alive?</td>
                </tr>';

if (!empty($_SESSION['bees'])) {
    foreach ($_SESSION['bees'] as $bee) {
        echo '<tr>';
        echo "<td>" . $bee->getType()->getName() . "</td>";
        echo "<td>$bee->life_points</td>";
        echo "<td>" . $bee->getRemaining() . "</td>";
        echo "<td>$bee->alive</td>";
        echo "</tr>";
    }
}
echo '</table>';
?>


<a href="/?hit=1" alt="hit">Hit</a>