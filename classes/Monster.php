<?php
/**
 * Created by PhpStorm.
 * User: David and Adolfo
 * Date: 2/6/19
 * Time: 11:33 AM
 */
class Monster
{
    private $_name;

    function __construct($name = "?")
    {
        $this->setName($name);
    }

    function setName($nameInput)
    {
        $this->_name = $nameInput;
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