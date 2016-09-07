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

    public function __construct( $life, $deduct)
    {
        $this->life_points = $life;
        $this->deduct_points = $deduct;
    }

    public function hit()
    {
       $this->life_points =  $this->life_points - $this->deduct_points;
       if($this->life_points <= 0){
           $this->alive = false;
       }
    }

}