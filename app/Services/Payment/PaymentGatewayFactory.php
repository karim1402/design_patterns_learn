<?php
namespace App\Services\Payment;

use App\Services\Payment\Contracts\PaymentGatewayInterface;
use InvalidArgumentException;

class PaymentGatewayFactory {

    public static function make($type): PaymentGatewayInterface {

        $gateways = config('payment.gateways');

        if (!isset($gateways[$type])) {
            throw new InvalidArgumentException("Unsupported payment method: {$type}");
        }

        return app()->make($gateways[$type]);
    }
}