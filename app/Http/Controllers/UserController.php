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

    public function getTrack()
    {
        return view('user.tracking');
    }

    public function postEditInfo(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required'
        ]);

        $mobile = $request->input('mobile');
        $addrLine1 = $request->input('addrLine1');
        $addrLine2 = $request->input('addrLine2');
        $addrCity = $request->input('addrCity');

        $email = Auth::user()->email;


        DB::table('users')->where('email', $email)->update(array(
            'addr_line1' => $addrLine1,
            'addr_line2' => $addrLine2,
            'addr_city' => $addrCity,
            'phone_no' => $mobile,
        ));
        return redirect(route('user.profile'))->with('message', 'Information Updated');
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

    public function postRegUser(Request $request)
    {

        session(['AdminRegUser' => 1]);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email | required | unique:users',
            'password' => 'required | min:4',
            'role' => 'required'
        ]);


        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
            'role_name' => $this->getRoleName($request->input('role')),
        ]);
        $user->save();
        return redirect()->back();

    }

    public function postAddr(Request $request)
    {
        $addr = DB::select("select * from users where email='" . Auth::user()->email . "'");

        $isnull = 0; //a pointer to show hide divs in client browser

        foreach ($addr as $row) {
            $line1 = $row->addr_line1;
            $line2 = $row->addr_line2;
            $city = $row->addr_city;
            $phone = $row->phone_no;
        }

        if ($phone == null) {
            $phone = "";
        }
        if ($line1 == null) {
            $line1 = "";
            $isnull = 1;
        }
        if ($line2 == null) {
            $line2 = "";
        }
        if ($city == null) {
            $city = "";
            $isnull = 1;
        }

        return response()->json(['line1' => $line1, 'line2' => $line2, 'city' => $city, 'phone' => $phone, 'isnull' => $isnull], 200);
    }

    public function getLogout()
    {
        Cart::store(Auth::user()->email);       //saving the cart into a database
        Cart::destroy();        //destroying the current cart object
        Auth::logout();
        return redirect()->back();
    }
}
