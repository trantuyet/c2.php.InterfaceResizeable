<?php

class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getArea()
    {
        return  $this->height*$this->width;
    }
}