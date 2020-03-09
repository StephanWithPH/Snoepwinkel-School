<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class PaymentController extends Controller
{
    public function countTotalPrice($products){
        $total = 0.0;
        foreach ($products as $product){
            $total += $product->price;
        }

        return $total;
    }


    public function preparePayment()
    {


        $payment = Mollie::api()->payments()->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => $this->countTotalPrice(Order::find(session('lastCreatedOrderId'))->products), // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'My first API payment',
            'webhookUrl' => action('PaymentController@paymentReceive'),
            'redirectUrl' => action('OrderController@createOrderConfirmed'),
        ]);

        $payment = Mollie::api()->payments()->get($payment->id);

        session(['latestPaymentId' => $payment->id]);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function paymentReceive(){
        session('latestPaymentId');
        $payment = Mollie::api()->payments()->get(session(['latestPaymentId']));

        if ($payment->isPaid())
        {
            $order = Order::find(session('lastCreatedOrderId'));
            $order->paid = true;

            $order->save();
        }

    }
}
