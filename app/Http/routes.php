<?php

// site routes
Route::get('/', 'SiteController@showHome');

// authentication routes
Route::auth();

// subscription routes
Route::get('subscribe/{product}', 'SiteController@showSubscribe');
Route::post('subscribe', 'SubscribeController@processSubscribe');

Route::group(['middleware' => 'auth'], function() {
    // welcome page
    Route::get('welcome', 'SubscribeController@showWelcome'); // middleware('subscribed');
    Route::get('/braintree/token', 'BraintreeTokenController@token');

    // account routes
    // show the account
    Route::get('account', 'AccountController@showAccount');

    // update subscription
    Route::post('account/subscription', 'AccountController@updateSubscription');

    // update credit card
    Route::post('account/card', 'AccountController@updateCard');

    // download pdf
    Route::get('account/invoices/{invoice}', 'AccountController@downloadInvoice');

    // delete subscription
    Route::delete('account/subscription', 'AccountController@deleteSubscription');
});

// single post route
Route::get('{slug}', 'SiteController@showProduct');
