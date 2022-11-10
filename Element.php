<?php

class Element
{
    private string $name;
    private array $beats;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBeats(): array
    {
        return $this->beats;
    }

        public function setBeats(array $beats): void
    {
        $this->beats []= $beats;
    }
}