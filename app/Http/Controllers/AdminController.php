<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Item_info;
use Illuminate\Support\Facades\DB;
use \Cart as Cart;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function getIndex()
    {
        Cart::destroy();
        return view('admin.index');
    }

    public function getReports($type, $day)
    {
        //dd($type);
        $topic = "haha";
        $orders = "";
        if ($type == "orders") {
            if ($day == "recent") {
                Cart::destroy();
                $orders = DB::select('select * from orders ORDER BY added DESC LIMIT 8');
                $topic = "Recent Orders";
            }
        } elseif ($type == "deliveries") {
            if ($day == "recent") {
                Cart::destroy();
                $orders = DB::select('select * from orders WHERE delivery=1 ORDER BY added DESC LIMIT 8');
                $topic = "Recent Deliveries";
            }
        } elseif ($type == "earning") {
            if ($day == "recent") {
                dd("today earning");
                $topic = "Recent Earnings";
            }
        } elseif ($type == "service") {
            if ($day == "recent") {
                dd("today service");
                $topic = "Recent Service Requests";
            }
        }

        return view('admin.info_view', ['orders' => $orders, 'topic' => $topic]);
        // return view('admin.info_view', ['orders'=>$orders,'test'=>$test]);
    }

    public function syncData(Request $request)
    {
        $recentOrder = DB::select('SELECT count(*) as total FROM orders WHERE DATE(added) = CURDATE();');
        $recentDeliveries = DB::select('SELECT count(*) as total FROM orders WHERE DATE(added) = CURDATE() AND delivery = 1;');
        $recentEarning = DB::select('select date(added) as day,sum(total) as tot from orders group by date(added) ORDER BY day DESC LIMIT 1');

        $arr = [$recentOrder[0]->total, $recentDeliveries[0]->total, $recentEarning[0]->tot];
        return response()->json(['msg' => $arr], 200);
    }


    public function syncEarning()
    {
        $sales = DB::select('select date(added) as day,sum(total) as tot from orders group by date(added)');

        $arr = array();

        foreach ($sales as $record) {
            $temp = [$record->day, $record->tot];
            array_push($arr, $temp);
        }

        return response()->json(['msg' => $arr], 200);
    }


    public function show($id)
    {
        $orders = DB::select('select * from orders where id = ? ', [$id]);


        Cart::destroy();
        foreach ($orders as $ord) {
            $cart = $ord->order_obj;
            $cart = unserialize($cart);
            //dd($cart);
            foreach ($cart as $itm) {
                Cart::add($itm->id, $itm->name, $itm->qty, $itm->price);
            }
        }

        return view('admin.details', compact('orders'));
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
        $warrenty = $request->input('warranty');
        $brand = 'null';

        $item_type = $request->ITEM_TYPE;
        if ($item_type == "acc") {
            $specific = $request->input('specification');
            $catagory = $request->input('catagory');

            DB::insert("insert into $table (proid,catagory,name,type,availability,description,warrenty,image,img1,img2,img3,price,discount_price,specification) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
                [$proid, $catagory, $name, $type, $availability, $description, $warrenty, $imgThumb[0], $imgArr[0], $imgArr[1], $imgArr[2], $price, $discount_price, $specific]);
        } else {
            $item = new Item_info();

            $brand = $request->input('brand');

            $specifications = $request->except('_token', 'productid', 'brand', 'model', 'cond', 'price', 'dis_price', 'warranty', 'availability', 'img', 'img1', 'add');
            foreach ($specifications as $key => $value) {
                $item->addToArray($key, $value);
            }

            $itemDetails = serialize($item);

            DB::insert("insert into $table (proid,name,brand,type,availability,description,warrenty,image,img1,img2,img3,price,discount_price,itemDetails) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
                [$proid, $name, $brand, $type, $availability, $warrenty, $description, $imgThumb[0], $imgArr[0], $imgArr[1], $imgArr[2], $price, $discount_price, $itemDetails]);
        }

        //update stock table
        DB::table('stock')->insert(
            ['proid' => $proid]
        );

        //add to the hash table to improve searching
        DB::table('hash_table')->insert(
            ['proid' => $proid, 'brand' => $brand, 'name' => $name, 'tableName' => $table]
        );

        return redirect(route('admin.additems'))->with('message', 'Item Added Succesfully');
    }

    public function getEditItem(Request $request)
    {
        //need to validate data here
        // dd($request);
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
        //dd($table);
        $row = array_merge($rowX, $item->returnArr());

        return view('admin.edit_item')->with('data', ['type' => $table[1], 'row' => $row]);
    }

    public function removeUsr(Request $request)
    {
        //dd($request);

        DB::table('users')->where('email', '=', $request->email)->delete();
        return redirect()->back();
    }

    public function removeItem(Request $request)
    {

        $arr = $this->getItemType($request->proid);
        // dd($arr);

        DB::table($arr[0])->where('proid', '=', $request->proid)->delete();
        return redirect()->back();
    }

    public function getUserHistory()
    {
        $userQry = DB::select("select name,email,role_name,created_at,last_login from users");
        return view('admin.login_history', ['userQry' => $userQry]);
    }

    public function postRegUser(Request $request)
    {
        //dd($request);
        session(['AdminRegUser' => 1]);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email | required | unique:users',
            'pwd' => 'required | min:4',
            'role' => 'required'
        ]);


        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('pwd')),
            'role' => $request->input('role'),
            'role_name' => $this->getRoleName($request->input('role')),
        ]);
        $user->save();
        return redirect()->back();

    }

    public function getDeliReport()
    {
        //delivery list
        $cust = DB::select('select * from orders a, users b where a.delivery=0 AND a.email=b.email');
        return view('admin.Del', compact('cust'));
    }

    public function custHistory()
    {
        $cust = DB::select('select distinct(a.email), b.name from orders a, users b where a.email=b.email');
        return view('admin.customer', compact('cust'));
    }

    public function showDets($cus)
    {
        $cust = DB::select('select * FROM orders WHERE email=?', [$cus]);
        $cusDets = DB::select('select * FROM users WHERE email=?', [$cus]);
        return view('admin.customerDet', compact('cust', 'cusDets'));
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
