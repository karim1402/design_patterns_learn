<?php 
namespace App\Services\Shipping\Strategies;

use App\Services\Shipping\Contracts\ShippingStrategyInterface;

class FreeShipping implements ShippingStrategyInterface{

   public function calculate(float $weight, float $distance): float{
      return 0.0;
   }
}