<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('stripe');
});

Route::post('/', function(){


    \Stripe\Stripe::setApiKey(Config::get("stripe.secret_key"));

    //$token  = Input::get('stripeToken'); echo $token;exit;

//    $customer = \Stripe\Customer::create(array(
//        'email' => Input::get("stripeEmail"),
//        'card'  => Input::get("stripeToken")
//    ));

    try {
        $charge = \Stripe\Charge::create(array(
            //'customer' => $customer->id,
            'card' => Input::get("stripeToken"),
            'amount' => 9000,
            'currency' => 'usd',
            'description' => Input::get("stripeEmail"),
        ));
    }catch(Stripe_CardError $e){
        dd($e);
    }
});