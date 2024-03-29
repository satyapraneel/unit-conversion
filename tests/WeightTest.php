<?php

namespace UnitConversion\Tests;

use PHPUnit\Framework\TestCase;
use UnitConversion\Weight;

class WeightTest extends TestCase
{
    /**
     * @test
     */
    public function testConvertKGToLB()
    {
        $lbs = Weight::fromKilogram(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }

    /**
     * @test
     */
    public function testConvertKGToStones()
    {
        $toStones = Weight::fromKilogram(100)->toStones();

        $this->assertEquals(15.747, $toStones);
    }
}
