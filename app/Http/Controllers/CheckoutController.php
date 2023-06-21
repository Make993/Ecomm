<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function checkout(Request $req){
        $checkout = new checkout;
        $checkout-> First Name=$req->FirstName;
        $checkout-> Last Name=$req->LastName;
        $checkout-> E-mail=$req->Email;
        $checkout->Mobile No=$req->Mobile;
        $checkout->Country=$req->Country;
        $checkout->City=$req->City;
        $checkout->save();
        return redirect('checkout');
    }
}
