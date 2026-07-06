<?php

use App\Services\Payment\Gateways\FawryGateway;
use App\Services\Payment\Gateways\PaymobGateway;
use App\Services\Payment\Gateways\StripeGateway;

return [
    'gateways' => [
        'fawry' => FawryGateway::class,
        'stripe' => StripeGateway::class,
        'paymob' => PaymobGateway::class,
    ],
];
