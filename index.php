<?php
/**
 * Created by PhpStorm.
 * User: taz.el-kikhia
 * Date: 5/2/17
 * Time: 3:48 PM
 */
require("Rectangle.php");
require("Square.php");

$shape = new Rectangle("recked", 2, 6);

$another = new Square("bob", 4);


print("\n\n");
print($another->getArea());
print("\n\n");

