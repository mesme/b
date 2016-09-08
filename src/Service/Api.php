<?php


namespace Bee\PHP\Test\Service;

use Bee\PHP\Test\Contract\Type;
use Bee\PHP\Test\Model\Bee;


class Api
{
    private $session;

    public function __construct($session)
    {
        $this->session = $session;


        if(!isset($this->session['game_started']) || $this->session['game_started'] === false) {

            $bees = [];

            $bees[] = new Bee(100, 8, new Type('Queen'));

            for ($i = 0; $i < 5; $i++) {
                $bees[] = new Bee(75, 10, new Type('Worker'));
            }

            for ($j = 0; $j < 8; $j++) {
                $bees[] = new Bee(50, 12, new Type('Drone'));
            }
            $this->session['bees'] = $bees;

        }
    }

    public function play()
    {
        $this->session['game_started'] = true;
    }

    public function endGame()
    {
        session_destroy();
    }

    public function showPoints()
    {

            echo '<table>
                <tr>
                    <td>Type</td>
                    <td>Total</td>
                    <td>Remaining</td>
                    <td>Alive?</td>
                </tr>';

                if(!empty($this->session['bees'])) {
                    foreach($this->session['bees'] as $bee) {
                        echo '<tr>';
                            echo "<td>".$bee->getType()."</td>";
                            echo "<td>$bee->life_points</td>";
                            echo "<td>".$bee->getRemaining()."</td>";
                            echo "<td>$bee->alive</td>";
                        echo "</tr>";
                    }
                }
            echo '</table>';
    }
}