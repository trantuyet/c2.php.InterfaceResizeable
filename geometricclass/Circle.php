<?php
include_once 'interface/Resizeable.php';
class Circle implements Resizeable
{
    public $radius;
    public $name;

    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
    public function resize($percent)
    {
        return $this->getArea() + ($this->getArea() * $percent) / 100;
    }
}