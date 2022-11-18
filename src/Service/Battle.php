<?php

namespace Estudos\Service;

use Estudos\Model\Hero;

class Battle
{
    private $name;
    public $heros;
    private $highestAttack = 0;
    private $lowestAttack = 9999999;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function registerHero(Hero $hero)
    {
        $this->heros[] = $hero;

        if($hero->power >= $this->highestAttack) {
            $this->highestAttack = $hero->power;
        }
        
        if($hero->power <= $this->lowestAttack) {
            $this->lowestAttack = $hero->power;
        }
    }

    public function getHighestAttack()
    {
        return $this->highestAttack;
    }

    public function getLowestAttack()
    {
        return $this->lowestAttack;
    }
}