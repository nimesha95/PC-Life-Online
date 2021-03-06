<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use Illuminate\Http\Request;
use \Cart as Cart;
use Carbon\Carbon;

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

        $addr = $request->input('geoposition1d');
        $addrCity = $request->input('geoposition1c');

        $lati = $request->input('geoposition1a');
        $longi = $request->input('geoposition1b');

        $email = Auth::user()->email;

        DB::table('users')->where('email', $email)->update(array(
            'addr_line1' => explode(",", $addr)[0],
            'addr_line2' => $addr,
            'addr_city' => $addrCity,
            'phone_no' => $mobile,
            'lati' => $lati,
            'longi' => $longi
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

            DB::table('users')->where('email', $request->input('email'))->update(array(
                'last_login' => Carbon::now()->toDateTimeString(),      //saving current timestamp as last login activity
            ));

            switch ($type) {
                case 0: //0 is admin
                    return redirect()->route('admin.index');
                    break;
                case 1: //1 is normal user
                    Cart::restore(Auth::user()->email);
                    return redirect()->route('product.index');
                    break;
                case 2: //2 is stockmanager
                    return redirect()->route('stockmanager.index');
                    break;
                case 3: //3 is cashier
                    return redirect()->route('cashier.index');
                    break;
                case 4: //4 is technician
                    return redirect()->route('technician.index1');
                    break;
            }
        } else {
            return redirect()->back()->withErrors("Please Check your credentials");
        }
    }

    public function getProfile()
    {
        $info = DB::select("select * from users where email='" . Auth::user()->email . "'");
        return view('user.profile', ['profile_info' => $info]);
    }

    public function getProfile1()
    {
        $info = DB::select("select * from users where email='" . Auth::user()->email . "'");
        return view('user.profile_info', ['profile_info' => $info]);
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
        //dd($request);
        session(['AdminRegUser' => 1]);
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'email | required | unique:users',
            'password' => 'required | min:4',
        ]);


        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'phone_no' => $request->input('phone'),
            'role' => 1,
            'role_name' => 'user',
        ]);
        $user->save();
        return redirect()->route('product.index');

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

    public function getTest()
    {
        return view('user.testing');
    }
}
