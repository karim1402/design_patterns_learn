<?php

namespace App\Services\Payment\Contracts;


interface PaymentGatewayInterface {
    public function pay($amount);

    public function refund($amount);
}