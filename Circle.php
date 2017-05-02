<?php
/**
 * Created by PhpStorm.
 * User: taz.el-kikhia
 * Date: 5/2/17
 * Time: 2:02 PM
 */



class Circle extends Shape {

    private $_radius = 0;
    private $_pi = 3.14;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->_radius = $radius;
    }

    public function getArea()
    {
        return $this->_pi * $this->_radius ** 2;
    }

    public function getPerimeter()
    {
        return 2 * $this->_pi * $this;
    }
}