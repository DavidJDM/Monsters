<?php
/**
 * Created by PhpStorm.
 * User: davidkovalevich
 * Date: 2/6/19
 * Time: 11:33 AM
 */

class Monster
{
    private $_name;

    function __construct($_name = "monster")
    {
        $this->_name = $this->setName();
    }

    function setName($nameInput)
    {
        $_name = $nameInput;
    }

    function getName()
    {
        return $this->_name;
    }

    function attack()
    {
        echo $this->_name . " is attacking!";
    }
}