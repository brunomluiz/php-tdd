<?php

namespace Estudos\Tests\Service;

use Estudos\Model\Hero;
use Estudos\Service\Battle;
use PHPUnit\Framework\TestCase;

class BattleTest extends TestCase
{
    private $slark;
    private $spectre;
    private $centauro;
    private $cristal_maiden;

    protected function setUp() : void
    {
        $this->slark = new Hero('Slark', 100, 70);
        $this->spectre = new Hero('Spectre', 100, 50);
        $this->centauro = new Hero('Centauro', 100, 40);
        $this->cristal_maiden = new Hero('Cristal Maiden', 100, 30);
    }

    public function testIfWeHave4HerosOnBattle()
    {
        $battle = new Battle('Defence of The Ancient');
        $battle->registerHero($this->slark);
        $battle->registerHero($this->spectre);
        $battle->registerHero($this->centauro);
        $battle->registerHero($this->cristal_maiden);

        $this->assertCount(4, $battle->heros);
    }

    public function testHeroWithHighestAttack()
    {
        $battle = new Battle('Defence of The Ancient');
        $battle->registerHero($this->slark);
        $battle->registerHero($this->spectre);

        $this->assertEquals(70, $battle->getHighestAttack());
    }

    public function testHeroWithLowestAttack()
    {
        $battle = new Battle('Defence of The Ancient');
        $battle->registerHero($this->slark);
        $battle->registerHero($this->cristal_maiden);
        $battle->registerHero($this->spectre);

        $this->assertEquals(30, $battle->getLowestAttack());
    }
}