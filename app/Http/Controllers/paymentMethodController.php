<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentMethodController extends Controller
{
   public function view(){
       return view('payment_method');
   }
}
