<?php

namespace Estudos\Service;

class Fight
{
    private $battle;
    private $heros;

    public function __construct(Battle $battle)
    {
        $this->battle = $battle;
        $this->heros = $this->battle->heros();
    }

    public function fight()
    {
        $hero1 = $this->heros[0];
        $hero2 = $this->heros[1];

        $i = 0;
        do {
            if ($hero1->healt() <= 0) {
                $hero2->receiveDamage($hero1->attack());
            }
            
            if ($hero1->healt() <= 0) {
                $hero2->receiveDamage($hero1->attack());
            }
        } while ($i > 0);
        
    }
}