<?php
/**
 * Created by PhpStorm.
 * User: David and Adolfo
 * Date: 2/6/19
 * Time: 11:33 AM
 */

class godzilla extends Monster
{

    private $_victims;

    function __construct($name)
    {
        $this->_victims = 0;
        parent::__construct($name);
    }

    function attack()
    {
        echo Monster().$this->attack();
        $this->_victims++;
    }

    function getVictims()
    {
        return $this->_victims;
    }

}