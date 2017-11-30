<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function getIndex()
    {
    	x=1;
        return view('cashier.index');
    }
}
