<?php
/**
 * Created by PhpStorm.
 * User: aswin
 * Date: 07/09/16
 * Time: 18:58
 */

namespace Bee\PHP\Test\Contract;


class Bee {

    private $life_points;
    private $deduct_points;
    private $alive;

    function __construct( $life, $deduct, $alive)
    {
        $this->life_points = $life;
        $this->deduct_points = $deduct;
        $this->alive = $alive;
    }

    /**
     * @return mixed
     */
    public function getLifePoints()
    {
        return $this->life_points;
    }

    /**
     * @return mixed
     */
    public function getDeductPoints()
    {
        return $this->deduct_points;
    }

    /**
     * @return mixed
     */
    public function getAlive()
    {
        return $this->alive;
    }


}