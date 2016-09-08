<?php
/**
 * Created by PhpStorm.
 * User: aswinsundaram
 * Date: 07/09/16
 * Time: 19:26
 */

namespace Bee\PHP\Test\Model;

use Bee\PHP\Test\Contract\Contract;
use Bee\PHP\Test\Contract\Type;

class Bee implements Contract {

    public $life_points;
    public $deduct_points;
    public $alive = true;
    private $remaining;
    private $type;

    public function __construct( $life, $deduct, Type $type)
    {
        $this->remaining = $this->life_points = $life;
        $this->deduct_points = $deduct;
        $this->type = $type;
    }

    public function hit()
    {
        if($this->remaining <= 0){
            return false;
        }

        $this->remaining =  $this->remaining - $this->deduct_points;

        if($this->remaining <= 0){
            $this->alive = false;
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function getRemaining()
    {
        return $this->remaining;
    }

    public function getType()
    {
        return $this->type;
    }


}