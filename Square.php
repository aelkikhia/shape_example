<?php
/**
 * Created by PhpStorm.
 * User: taz.el-kikhia
 * Date: 5/2/17
 * Time: 2:03 PM
 */


class Square extends Rectangle {git@github.com:aelkikhia/shape_example.git

    /**
     * Square constructor.
     * @param $name
     * @param $side
     */
    public function __construct($name, $side)
    {
        parent::__construct($name, $side, $side);
    }
}