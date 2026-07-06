<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Shipping\ShippingContext;
use App\Services\Shipping\Strategies\StandardShipping;
use App\Services\Shipping\Strategies\ExpressShipping;
use App\Services\Shipping\Strategies\FreeShipping;

class shippingController extends Controller
{
    public function shipping_cost(Request $request){

       $validated = $request->validate([
            'method'   => 'required|in:standard,express,free',
            'weight'   => 'required|numeric|min:0',
            'distance' => 'required|numeric|min:0',
        ]);

        $strategy = match ($validated['method']) {
            'standard' => new StandardShipping(),
            'express'  => new ExpressShipping(),
            'free'     => new FreeShipping(),
        };

        $context = new ShippingContext($strategy);
        $cost = $context->calculateCost($request->weight,$request->distance);

         return response()->json([
            'method' => $validated['method'],
            'cost'   => $cost,
        ]);

    }
}
