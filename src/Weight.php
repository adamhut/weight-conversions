<?php

namespace Adamhut\WeightConversions;

class Weight
{
    protected $kilograms;

    public static function poundToKilograms(float $pounds): float
    {
        return number_format(($pounds * 0.453592), 2, '.', '')  ;
    }

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}
