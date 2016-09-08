<?php
/**
 * Created by PhpStorm.
 * User: bigstudio03
 * Date: 08/09/2016
 * Time: 08:27
 */

namespace Bee\PHP\Test\Contract;


class Type
{
    private $name;

    public function __construct($type)
    {
        if(!in_array($type,['Queen', 'Drone', 'Worker'])){
            throw new \Exception('Not a valid type');
        }
        $this->name = $type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}