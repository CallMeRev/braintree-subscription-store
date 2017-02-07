<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Product;
use Auth;

class SubscribeController extends Controller
{

    /**
     * Process the form
     */
    public function processSubscribe(Request $request)
    {
        // grab the user
        $user = $request->user();

        // create the users subscription

        $product = Product::findOrFail($request->input('plan'));

        // create the subscription
        try {
          $user->newSubscription($product->name, $product->braintree_plan)->create($request->payment_method_nonce);

        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'Error creating subscription.']);
        }

        return redirect('welcome');
    }

    /**
     * Show the welcome page
     */
    public function showWelcome()
    {
        $products = Product::all(); //where('premium', true)
        return view('pages.welcome', compact('products'));
    }

}
