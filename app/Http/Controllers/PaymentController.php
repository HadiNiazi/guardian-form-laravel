<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function checkout()
    {
        return view('stripe.index');
    }
    public function processPayment(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            \Stripe\Charge::create([
                "amount" => $request->amount,
                "currency" => "usd",
                "source" => "tok_amex", // use tok_visa and tok_amex for test payments
                // "source" => $request->stripeToken, // this will be added for live env
            ]);
        }
        catch(\Exception $ex){
            return back()->with('alert-danger', $ex->getMessage());
        }

        return back()->with('alert-success', 'Payment Processed Successfully');

    }
}
