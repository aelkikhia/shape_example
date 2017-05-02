<?php
/**
 * Created by PhpStorm.
 * User: taz.el-kikhia
 * Date: 5/2/17
 * Time: 1:49 PM
 */


abstract class Shape {

    private $_name = "";

    public function __construct($name)
    {
        $this->_name = $name;
    }

    protected function _getName()
    {
        return $this->_name;
    }

    protected function setName($name)
    {
        $this->_name = $name;
    }

    abstract public function getArea();
    abstract public function getPerimeter();
}