<?php

namespace UnitConversion;

class Weight
{
    public static function fromKilogram(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(private float $kilogram)
    {
    }

    public function toLbs(): float
    {
        return number_format($this->kilogram * 2.204623, 4);
    }

    public function toStones() : float
    {
        return number_format($this->kilogram * 0.15747, 4);
    }
}
