<?php
/**
 * Created by PhpStorm.
 * User: davidkovalevich
 * Date: 2/6/19
 * Time: 11:54 AM
 */

class Vampire extends Monster
{
    private $_vampireName;
    private $_victims;

    function __construct($nameInput)
    {
        $this->_victims = 0;
        $this->_vampireName = new Monster().$this->setName($nameInput);
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