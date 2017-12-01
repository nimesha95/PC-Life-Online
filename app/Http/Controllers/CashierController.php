<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use \Cart as Cart;

class CashierController extends Controller
{
    public function getIndex()
    {
        Cart::destroy();

        $orders = DB::select('select * from orders where verified = ? ORDER BY added DESC ', [0]);
        $email = "nimesha95@live.com";
        //Mail::to($email)->send(New cashier());
        return view('cashier.index', compact('orders'));
    }

    public function show($cash)
    {
        $orders = DB::select('select * from orders where id = ? ', [$cash]);


        Cart::destroy();
        foreach ($orders as $ord) {
            $cart = $ord->order_obj;
            $cart = unserialize($cart);
            //dd($cart);
            foreach ($cart as $itm) {
                Cart::add($itm->id, $itm->name, $itm->qty, $itm->price);
            }
        }

        return view('cashier.details', compact('orders'));
    }

    public function update($cash)
    {
        //dd($cash);

        DB::update('update orders set verified = 1 where  id = ? ', [$cash]);
        //$email=DB::select('select email from orders where id = ? ', [$cash]);
        //$email = "nimesha95@live.com";
        //Mail::to($email)->send(New cashier());

        return redirect(route('cashier.index'));
    }
}
