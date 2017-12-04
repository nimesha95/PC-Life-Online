<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Item_info;
use Illuminate\Support\Facades\DB;


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

        // \Illuminate\Support\Facades\Session::put('type', [$table]);
        \Illuminate\Support\Facades\Session::put('type', [$type]);
        \Illuminate\Support\Facades\Session::put('table', $table);
        return redirect(route('admin.additems'));
    }

    public function postAdditems(Request $request)
    {
        $table = \Illuminate\Support\Facades\Session::get('table');

        $count = 0;
        //added "image not avialable" link to the imgArr
        $imgThumb = [];
        $imgArr = ["http://res.cloudinary.com/docp8wv1x/image/upload/v1508704084/dprnfntaojeelbyvakmn.jpg", "http://res.cloudinary.com/docp8wv1x/image/upload/v1508704084/dprnfntaojeelbyvakmn.jpg", "http://res.cloudinary.com/docp8wv1x/image/upload/v1508704084/dprnfntaojeelbyvakmn.jpg"];
        if ($request->hasFile('img1')) {
            $thumb = $request->img1;
            \Cloudder::upload($thumb);      //uploading image to cloudinary
            $c = \Cloudder::getResult();      //getting the result array
            $imgThumb[0] = $c['url'];
        }
        if ($request->hasFile('img')) {
            foreach ($request->img as $image) {
                \Cloudder::upload($image);      //uploading image to cloudinary
                $c = \Cloudder::getResult();      //getting the result array
                $imgArr[$count] = $c['url'];
                $count = $count + 1;
            }
        }

        $proid = $request->input('productid');
        $name = $request->input('model');
        $description = $request->input('description');
        $type = $request->input('cond');
        $price = $request->input('price');
        $discount_price = $request->input('dis_price');
        $availability = $request->input('availability');

        $item_type = $request->ITEM_TYPE;
        if ($item_type == "acc") {
            $specific = $request->input('specification');

            DB::insert("insert into $table (proid,name,type,availability,description,image,img1,img2,img3,price,discount_price,specification) values (?,?,?,?,?,?,?,?,?,?,?,?)",
                [$proid, $name, $type, $availability, $description, $imgThumb[0], $imgArr[0], $imgArr[1], $imgArr[2], $price, $discount_price, $specific]);
        } else {
            $item = new Item_info();

            $brand = $request->input('brand');

            $specifications = $request->except('_token', 'productid', 'brand', 'model', 'cond', 'price', 'dis_price', 'availability', 'img', 'img1', 'add');
            foreach ($specifications as $key => $value) {
                $item->addToArray($key, $value);
            }

            $itemDetails = serialize($item);

            DB::insert("insert into $table (proid,name,brand,type,availability,description,image,img1,img2,img3,price,discount_price,itemDetails) values (?,?,?,?,?,?,?,?,?,?,?,?,?)",
                [$proid, $name, $brand, $type, $availability, $description, $imgThumb[0], $imgArr[0], $imgArr[1], $imgArr[2], $price, $discount_price, $itemDetails]);
        }
        return redirect(route('admin.additems'))->with('message', 'Item Added Succesfully');
    }

    public function getEditItem(Request $request)
    {
        //need to validate data here
        $pro_id = $request->input('pro_id');
        $table = $this->getItemType($pro_id);

        $item = new Item_info();

        $row = DB::select("SELECT * FROM $table[0] WHERE proid ='$pro_id'");

        //dd($row);
        // dd(session('type'));

        foreach ($row as $rw) {
            $item = $rw->itemDetails;
            $rowX = ['proid' => $rw->proid, 'name' => $rw->name, 'brand' => $rw->brand,
                'type' => $rw->type, 'availability' => $rw->availability,
                'description' => $rw->description, 'price' => $rw->price,
                'discount_price' => $rw->discount_price];
        }
        $item = unserialize($item);
        $row = array_merge($rowX, $item->returnArr());

        return view('admin.edit_item')->with('data', ['type' => $table[1], 'row' => $row]);
    }

    public function postRegUser(Request $request)
    {
        dd($request);
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
        } elseif ($var == 2) {
            return 'partials.items.laptop';
        } elseif ($var == 3) {
            return 'partials.items.accessories';
        }
    }

    private function getTable($var)
    {
        if ($var == 1) {
            return 'desktops';
        } elseif ($var == 2) {
            return 'laptops';
        } elseif ($var == 3) {
            return 'accessories';
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

    private function getItemType($var)
    {
        $prefix = substr($var, 0, 2);
        if ($prefix == "DS") {
            return ['desktops', 'partials.items.desktop_edit'];
        } elseif ($prefix == "LP") {
            return ['laptops', 'partials.items.laptop_edit'];
        } else {
            return ['accessories', 'partials.items.accessories_edit'];
        }
    }
}
