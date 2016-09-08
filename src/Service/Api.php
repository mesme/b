<?php

namespace Bee\PHP\Test\Service;

use Bee\PHP\Test\Contract\Type;
use Bee\PHP\Test\Model\Bee;


/**
 * Class Api
 * @package Bee\PHP\Test\Service
 */
class Api
{
    public function __construct()
    {

    }

    /**
     *
     */
    public function play()
    {

    }

    /**
     *
     */
    public function endGame()
    {
        session_destroy();
    }

    /**
     *
     */
    public function showPoints()
    {


    }
}