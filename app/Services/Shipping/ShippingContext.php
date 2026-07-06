<?php
// app/Services/Shipping/ShippingContext.php

namespace App\Services\Shipping;

use App\Services\Shipping\Contracts\ShippingStrategyInterface;

class ShippingContext
{
    public function __construct(
        private ShippingStrategyInterface $strategy
    ) {}

    public function calculateCost(float $weight, float $distance): float
    {
        return $this->strategy->calculate($weight, $distance);
    }

}