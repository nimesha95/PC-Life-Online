<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use \Cart as Cart;
use Nexmo\Laravel\Facade\Nexmo;

class CashierController extends Controller
{
    public function getIndex(Request $request)
    {
        //dd($request);
        Cart::destroy();

        $orders = DB::select('select * from orders where verified = ? and added like ? ORDER BY added DESC ', [0, '%' . $request->date . '%']);
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

    public function update($cash, Request $request)
    {
        $order_total = $request->input('order_total');
        $new_total = $request->input('new_total');

        if ($order_total == $new_total) {
            DB::update('update orders set verified = 1 where  id = ? ', [$cash]);
            DB::update('update orders set paid = 1 where  id = ? ', [$cash]);
        } else {
            DB::update('update orders set verified = 1  where  id = ? ', [$cash]);
            DB::update('update orders set paid = 1 where  id = ? ', [$cash]);
            DB::update('update orders set total = ?  where  id = ? ', [$new_total, $cash]);
        }

        //$email=DB::select('select email from orders where id = ? ', [$cash]);
        //$email = "nimesha95@live.com";
        //Mail::to($email)->send(New cashier());

        Nexmo::message()->send([
            'to' => '94775635458',
            'from' => 'PC Life',
            'text' => "you've order is confirmed ",
        ]);

        return redirect(route('cashier.index'));
    }
}
