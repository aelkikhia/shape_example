<?php
/**
 * Created by PhpStorm.
 * User: taz.el-kikhia
 * Date: 5/2/17
 * Time: 2:02 PM
 */

require("Shape.php");

class Rectangle extends Shape {

    private $_width = 0;
    private $_height = 0;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->_width = $width;
        $this->_height = $height;
    }

    public function getWidth($width)
    {
        $this->_width = $width;
    }

    public function getHeight($height)
    {
        $this->_height = $height;
    }

    public function getArea()
    {
        return $this->_height * $this->_width;
    }

    public function getPerimeter()
    {
        return ($this->_height * 2) + ($this->_width * 2);
    }

}