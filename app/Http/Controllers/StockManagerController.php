<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockManagerController extends Controller
{
    public function getIndex()
    {
        return view('stockmanager.index');
    }
}
