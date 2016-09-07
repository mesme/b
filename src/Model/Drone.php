<?php
/**
 * Created by PhpStorm.
 * User: aswinsundaram
 * Date: 07/09/16
 * Time: 19:26
 */

namespace Bee\PHP\Test\Model;


use Bee\PHP\Test\Contract\Bee;

class Drone extends Bee
{
    function __construct($life, $deduct)
    {
        parent::__construct($life, $deduct);
    }
}