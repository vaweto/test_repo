<?php

namespace Vaweto\TestRepo;

class Weight
{
    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(protected float $kilograms)
    {
    }

    public function toLbs():float
    {
        return $this->kilograms * 2.204623;
    }
}
