<?php 
namespace App\Services\Shipping\Strategies;

use App\Services\Shipping\Contracts\ShippingStrategyInterface;

class ExpressShipping implements ShippingStrategyInterface{

   public function calculate(float $weight, float $distance): float{
      return 10 + ($weight * 3) + ($distance * 0.5);
   }
}