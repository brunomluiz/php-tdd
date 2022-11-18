<?php

namespace Estudos\Tests\Model;

use Estudos\Model\Hero;
use PHPUnit\Framework\TestCase;

class HeroTest extends TestCase
{
    public function testWeHaveAtLeast1Hero()
    {
        $hero[] = new Hero("Timbersaw", 100, 100);
        $this->assertCount(1, $hero);
    }
}