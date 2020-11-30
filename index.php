<?php
//require_once 'vendor/autoload.php';
require 'forme.php';
require 'carre.php';
require 'triangle.php';
require 'cercle.php';
     echo(new carre(4))->aire(). PHP_EOL;
     echo(new cercle(5))->aire(). PHP_EOL;
     echo(new triangle(4,3))->aire(). PHP_EOL;

?>