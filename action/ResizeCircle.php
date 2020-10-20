<?php
include_once 'geometricclass/Circle.php';
include_once 'interface/Resizeable.php';
class ResizeCircle extends Circle implements Resizeable
{

    public function resize($newSize)
    {
        return (($newSize /100) * $this->getArea() +$this->getArea() );
    }
}