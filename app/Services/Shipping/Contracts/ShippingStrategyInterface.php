<?php 

namespace App\Services\Shipping\Contracts;


interface ShippingStrategyInterface{

    public function calculate(float $weight, float $distance): float;

}