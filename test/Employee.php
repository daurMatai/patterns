<?php
/**
 * Created by PhpStorm.
 * User: daur
 * Date: 7/19/17
 * Time: 11:53 PM
 */

class Employee
{
    /**
     * @var
     */
    protected $_name;
    /**
     * @var
     */
    protected $_age;


    /**
     * Employee constructor.
     * @param $_name
     * @param $_age
     */
    public function __construct($_name, $_age)
    {
        $this->_name = $_name;
        $this->_age = $_age;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }


}