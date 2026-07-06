<?php 
namespace App\Services\Payment\Gateways;

use App\Services\Payment\Contracts\PaymentGatewayInterface;

class StripeGateway implements PaymentGatewayInterface{

    public function pay($amount){

        //make stripe pay logic

    }

    public function refund($amount){

        //make stripe refund logic

    }

}