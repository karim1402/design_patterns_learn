<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Services\Payment\PaymentGatewayFactory;
use Illuminate\Http\Request;

class PaymenController extends Controller
{
    public function payment(Request $request){
          $request->validate([
        'payment_method' => 'required|string|in:fawry,stripe,paymob',
    ]);

    $gateway = PaymentGatewayFactory::make($request->payment_method);
    $gateway->pay(200);

    return response()->json(['message' => 'Payment processed']);

    }
}
