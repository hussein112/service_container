<?php

namespace App\Billing;

use Illuminate\Support\Str;

class PaymentGateway
{
    public function __construct(
        private $currency
    ){
    }
    /**
     * @param $amount in cents
     * @return void
     */
    public function charge($amount){
        return [
            'amount' => $amount,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency
        ];
    }
}
