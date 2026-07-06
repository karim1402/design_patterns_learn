<?php 
namespace App\Services\Shipping\Strategies;

use App\Services\Shipping\Contracts\ShippingStrategyInterface;

class StandardShipping implements ShippingStrategyInterface{

   public function calculate(float $weight, float $distance): float{
     return 5 + ($weight * 2);
   }
}