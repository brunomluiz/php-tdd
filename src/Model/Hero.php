<?php

namespace Estudos\Model;

class Hero
{
    private $name;
    private $healt;
    public $power;
    
    public function __construct(string $name, int $healt, int $power)
    {
        $this->name = $name;
        $this->healt = $healt;
        $this->power = $power;
    }
}