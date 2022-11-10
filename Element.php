<?php

class Element{

    private string $name;
    //elements ->papīrs, šķēres, akmens
    public function __construct($name){
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}