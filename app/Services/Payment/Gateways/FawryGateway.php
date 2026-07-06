<?php 
namespace App\Services\Payment\Gateways;

use App\Services\Payment\Contracts\PaymentGatewayInterface;

class FawryGateway implements PaymentGatewayInterface{

    public function pay($amount){

        //make fawry pay logic

    }

    public function refund($amount){

        //make fawry refund logic

    }

}