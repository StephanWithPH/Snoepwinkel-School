<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class PaymentController extends Controller
{
    public function countTotalPrice($products){
        $total = 0.00;
        foreach ($products as $product){
            $total += $product->price;
        }

        return $total;
    }


    public function preparePayment()
    {

        //TODO: Check if payments are getting created


        $payment = Mollie::api()->payments()->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => number_format($this->countTotalPrice(Order::find(session('lastCreatedOrderId'))->products), 2), // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'My first API payment',
            'webhookUrl' => action('PaymentController@paymentReceive'),
            'redirectUrl' => action('OrderController@createOrderConfirmed'),
        ]);
        $payment->metadata->order_id = session('lastCreatedOrderId');
        $payment = Mollie::api()->payments()->get($payment->id);
        dd($payment->metdata->order_id);
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function paymentReceive(Request $request){
        //TODO: Check if payment is received and changed to paid in database when it finishes
        if (! $request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if($payment->isPaid()) {
            $order = Order::find($payment->metadata->order_id);
            $order->paid = true;

            $order->save();
        }

    }
}
