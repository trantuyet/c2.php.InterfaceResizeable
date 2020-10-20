<?php
include  'geometricclass/Circle.php';
//include  'action/ResizeRectangle.php';
//include 'action/ResizeSquare.php';

$circle = new Circle('Circle',5);
//$rectangle = new ResizeRectangle(10,5);
//$square = new ResizeSquare(5);
//echo $circle->getName();
//echo '<br>';
//$result = $circle->resize(50);
//echo $result ;
$percent = rand(1,100);
echo $circle->resize($percent);
?>