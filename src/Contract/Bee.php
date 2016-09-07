<?php
/**
 * Created by PhpStorm.
 * User: aswin
 * Date: 07/09/16
 * Time: 18:58
 */

namespace Bee\PHP\Test\Contract;


class Bee {

    public $life_points;
    public $deduct_points;
    public $alive = true;
    private $remaining;

    public function __construct( $life, $deduct)
    {
        $this->remaining = $this->life_points = $life;
        $this->deduct_points = $deduct;
    }

    public function hit()
    {
       if($this->remaining < 0){
           return false;
       }
       $this->remaining =  $this->remaining - $this->deduct_points;
       if($this->remaining <= 0){
           $this->alive = false;
       }
    }

    /**
     * @return mixed
     */
    public function getRemaining()
    {
        return $this->remaining;
    }



}