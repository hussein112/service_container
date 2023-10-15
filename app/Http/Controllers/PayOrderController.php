<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;

class PayOrderController extends Controller
{
    /**
     * Laravel is injecting $paymentGateway automatically.
     * @param PaymentGateway $paymentGateway
     * @return void
     */
    public function store(PaymentGateway $paymentGateway){
        dd($paymentGateway->charge(2500));
    }
}
