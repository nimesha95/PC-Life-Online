<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Item_info;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function getIndex()
    {
        return view('admin.index');
    }

    public function getReports()
    {
        return view('admin.reports');
    }

    public function getAdditems()
    {
        $type = session('type');
        //dd($type[0]);
        $table = \Illuminate\Support\Facades\Session::get('table');
        $LastproidRow = DB::select("SELECT * FROM $table WHERE id = (SELECT max(id) FROM $table)");
        foreach ($LastproidRow as $row) {
            $lastID = $row->proid;
        }
        $lastID = $this->getNextProid($lastID);
        \Illuminate\Support\Facades\Session::put('lastID', $lastID);
        return view('admin.add_item')->with('type', [$type]);
    }

    public function redirect_add(Request $request)
    {
        $itmtype = $request->input('ItemType');    //this function passes the type of the item user selected to the getAdditems()
        $type = $this->getItemName($itmtype);
        $table = $this->getTable($itmtype);

        \Illuminate\Support\Facades\Session::put('type', [$table]);
        \Illuminate\Support\Facades\Session::put('type', [$type]);
        \Illuminate\Support\Facades\Session::put('table', $table);
        return redirect(route('admin.additems'));
    }

    public function postAdditems(Request $request)
    {
        $item = new Item_info();

        $proid = $request->input('productid');
        $name = $request->input('model');
        $brand = $request->input('brand');
        $type = $request->input('cond');
        $availability = $request->input('availability');
        $description = $request->input('description');
        $image = $request->input('pri_image');
        $img1 = $request->input('img1');
        $img2 = $request->input('img2');
        $img3 = $request->input('img3');
        $img4 = $request->input('img4');
        $price = $request->input('price');
        $discount_price = $request->input('dis_price');

        $specifications = $request->except('_token', 'productid', 'brand', 'model', 'cond', 'price', 'dis_price', 'availability', 'pri_image', 'img1', 'img2', 'img3', 'img4', 'add');
        foreach ($specifications as $key => $value) {
            $item->addToArray($key, $value);
        }

        $itemDetails = serialize($item);

        $table = \Illuminate\Support\Facades\Session::get('table');


        DB::insert("insert into $table (proid,name,brand,type,availability,description,image,img1,img2,img3,img4,price,discount_price,itemDetails) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
            [$proid, $name, $brand, $type, $availability, $description, $image, $img1, $img2, $img3, $img4, $price, $discount_price, $itemDetails]);

        return redirect(route('admin.additems'))->with('message', 'Item Added Succesfully');
        //dd($item);
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

    private function getRoleName($var)
    {
        if ($var == 0) {
            return 'Administrator';
        } elseif ($var == 1) {
            return 'User';
        } elseif ($var == 2) {
            return 'StockManager';
        } elseif ($var == 3) {
            return 'Cashier';
        } else {
            return 'Technician';
        }
    }

    private function getItemName($var)
    {
        if ($var == 1) {
            return 'partials.items.desktop';
        }
    }

    private function getTable($var)
    {
        if ($var == 1) {
            return 'desktops';
        }
    }

    private function getNextProid($var)
    {
        $prefix = substr($var, 0, 2);
        $postfix = substr($var, 2);
        $postfix = (int)$postfix;
        $postfix++;

        if (strlen((string)$postfix) == 3) {
            $postfix = "0" . $postfix;
        } elseif (strlen((string)$postfix) == 2) {
            $postfix = "00" . $postfix;
        } elseif (strlen((string)$postfix) == 1) {
            $postfix = "000" . $postfix;
        }
        $proid = $prefix . $postfix;
        return $proid;
    }

}
