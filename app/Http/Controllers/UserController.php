<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use Illuminate\Http\Request;
use \Cart as Cart;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email | required | unique:users',
            'password' => 'required | min:4'
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();

        Auth::login($user);

        return redirect()->route('product.index');
    }

    public function getSignin()
    {
        return view('user.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email | required ',
            'password' => 'required | min:4'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $type = Auth::user()->role;
            //dd($type);

            switch ($type) {
                case 0: //0 is admin
                    return redirect()->route('admin.index');
                    break;
                case 1: //1 is normal user
                    Cart::restore(Auth::user()->email);
                    return redirect()->route('user.profile');
                    break;
                case 2: //2 is stockmanager
                    return redirect()->route('stockmanager.index');
                    break;
                case 3: //3 is cashier
                    return redirect()->route('cashier.index');
                    break;
                case 4: //4 is technician
                    return redirect()->route('technician.index');
                    break;
            }
        } else {
            return redirect()->back()->withErrors("Please Check your credentials");
        }

    }

    public function getProfile()
    {
        return view('user.profile');
    }

    public function viewOrders()
    {
        $orders = DB::select("select * from orders where email='" . Auth::user()->email . "'");

        $count = 0;
        foreach ($orders as $order) {
            $order_obj = unserialize($order->order_obj);
            //    $order_obj = (array) $order_obj;
            //dd($order_obj);
            $orders[$count]->order_obj = $order_obj;
            $count++;
        }

        //dd($orders);
//This return the order, but need to show it .... RECHECK
        return view('user.profile', ['orders' => $orders]);
    }

    public function getLogout()
    {
        Cart::store(Auth::user()->email);       //saving the cart into a database
        Cart::destroy();        //destroying the current cart object
        Auth::logout();
        return redirect()->back();
    }
}