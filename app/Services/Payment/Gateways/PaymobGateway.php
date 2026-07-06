<?php 
namespace App\Services\Payment\Gateways;

use App\Services\Payment\Contracts\PaymentGatewayInterface;

class PaymobGateway implements PaymentGatewayInterface{

    public function pay($amount){

        //make Paymob pay logic

    }

    public function refund($amount){

        //make Paymob refund logic

    }

}