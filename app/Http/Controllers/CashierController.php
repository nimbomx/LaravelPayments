<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashierController extends Controller
{
    public function getUser(Request $request){
        return $request->user;
        $user = Auth::user();
        return $user;
    }
    public function createCustomer(Request $request){

        $user = $request->user();
        $stripeCustomer = $user->createOrGetStripeCustomer();
        return $stripeCustomer;
    }
    public function clearAccount(Request $request){

        $user = $request->user();
        $user->stripe_id = null;
        $user->save();
        return $user;
    }
}
