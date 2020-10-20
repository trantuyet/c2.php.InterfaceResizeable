<?php

class Square
{
    public $edge;

    public function __construct($edge)
    {
        $this->edge = $edge;
    }


    public function getEdge() {
        return $this->edge;
    }

    public function setEdge($edge)
    {
        $this->edge = $edge;
    }

    public function getArea()
    {
        return  $this->edge*$this->edge;
    }
}