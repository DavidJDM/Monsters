<?php
/**
 * Created by PhpStorm.
 * User: David and Adolfo
 * Date: 2/6/19
 * Time: 11:33 AM
 */

class Vampire extends Monster
{
    //private $_vampireName;
    private $_victims;

    function __construct($name)
    {
        //$this->_vampireName = new Monster.$this->setName($nameInput);
        parent::__construct($name);
        $this->_victims = 0;
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