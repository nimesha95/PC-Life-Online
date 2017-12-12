<?php

namespace App\Http\Controllers;

use App\StockHandler;
use Illuminate\Http\Request;
use App\Item_info;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Mail;
use \Cart as Cart;
use App\cashier;
use Nexmo\Laravel\Facade\Nexmo;
use SnappyImage;
use PDF;

class StockManagerController extends Controller
{
    public function getIndex()
    {
        /*
                        Nexmo::message()->send([
                            'to'   => '94778519113',
                            'from' => 'Hippo',
                            'text' => 'Testing sms'
                        ]);
        */
        /*
                $email = "nimesha95@live.com";
                Mail::to($email)->send(New cashier());
        */
        return view('stockmanager.index');
    }

    public function getAddStock(Request $request)
    {
        //dd($request);
        $type = $request['ItemType1'];
        $brand = $request['ItemModel1'];
        $product = $request['productSelect'];

        $table = $this->getTable($type);

        $itemProid = DB::select("select proid from $table WHERE name='" . $product . "'");
        foreach ($itemProid as $row) {
            $proid = $row->proid;
        }
        //dd($proid);
        return view('stockmanager.add_stock', ["brand" => $brand, "product" => $product, "proid" => $proid]);
    }

    public function check_orders(Request $request)
    {
        $msg = $request['body'];

        $orders_to_process = DB::select("select id,email,total,added from orders WHERE paid=1 AND verified=1 AND issued=0 ORDER BY added DESC;");

        return response()->json(['msg' => $orders_to_process], 200);
    }

    public function check_deli_orders(Request $request)
    {
        $msg = $request['body'];

        $orders_to_process = DB::select("select id,email,total,added from orders WHERE paid=1 AND issued=1 AND delivery=1 ORDER BY added DESC;");

        return response()->json(['msg' => $orders_to_process], 200);
    }

    public function check_stock_stat(Request $request)
    {
        $msg = $request['body'];
        $id = $request->id;
        /*
         *  id =1 means accessories
         *
         *
        */
        $mobo = 0;
        $arr = 0;
        if ($id == 1) {
            $mobo = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='motherboard'");
            $ram = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='ram'");
            $processor = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='processor'");
            $memorycard = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='memory_cards'");
            $mouse = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='mouse'");
            $keyboard = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='keyboard'");
        }

        //get item count from the database and
        $arr = [$mobo[0]->total, $ram[0]->total, $processor[0]->total, $memorycard[0]->total, $mouse[0]->total, $keyboard[0]->total];

        return response()->json(['msg' => $arr], 200);
    }

    public function AddStock(Request $request)
    {
        $proid = $request['proid'];
        $sno = $request['serialNo'];

        DB::table('items')->insert(
            ['sno' => $sno, 'proid' => $proid]
        );

        //DB::table('stock')->where('proid', $proid)->update(['stock' => DB::raw('stock+1')]);;
        DB::table('stock')->where('proid', $proid)->increment('stock', 1);

        return response()->json(['msg' => "hello there"], 200);
    }

    public function fillDrop(Request $request)
    {
        if ($request['type'] == 'model') {
            $catagory = $request['body'];
            $table = $this->getTable($catagory);

            if ($table == "accessories") {
                $itemBrand = DB::select("select DISTINCT catagory from $table WHERE 1");

                foreach ($itemBrand as $row) {
                    $brand_arr[] = array("id" => $row->catagory);
                }
            } else {
                $itemBrand = DB::select("select DISTINCT brand from $table WHERE 1");

                foreach ($itemBrand as $row) {
                    $brand_arr[] = array("id" => $row->brand);
                }
            }

            return response()->json(['msg' => $brand_arr], 200);
        } else if ($request['type'] == 'product') {
            $product = $request['body'];
            $cat = $request['cat'];
            $table = $this->getTable($cat);

            if ($table == "accessories") {
                $ProductList = DB::select("select name from $table WHERE catagory='$product'");
            } else {
                $ProductList = DB::select("select name from $table WHERE brand='$product'");
            }

            foreach ($ProductList as $row) {
                $product_arr[] = array("id" => $row->name);
            }

            return response()->json(['msg' => $product_arr], 200);
        }
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
        return view('stockmanager.add_item')->with('type', [$type]);
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

        return redirect(route('stock.additems'))->with('message', 'Item Added Succesfully');
        //dd($item);
    }

    public function redirect_add(Request $request)
    {
        //dd($request);
        $itmtype = $request->input('ItemType');    //this function passes the type of the item user selected to the getAdditems()
        $type = $this->getItemName($itmtype);
        $table = $this->getTable($itmtype);

        \Illuminate\Support\Facades\Session::put('type', [$table]);
        \Illuminate\Support\Facades\Session::put('type', [$type]);
        \Illuminate\Support\Facades\Session::put('table', $table);
        return redirect(route('stock.additems'));
    }

    public function getOrder($id)
    {
        Cart::destroy();
        $order = DB::table('orders')
            ->where('id', '=', $id)
            ->get();
        //Cart::add($proid, $name, 1, $price);
        foreach ($order as $ord) {
            $cart = $ord->order_obj;
            $cart = unserialize($cart);
            //dd($cart);
            foreach ($cart as $itm) {
                Cart::add($itm->id, $itm->name, $itm->qty, $itm->price);
            }
        }
        $deli_status = $order[0]->delivery;
        //dd($deli_status);
        return view('stockmanager.viewOrder', ['orderid' => $id, 'deli_stat' => $deli_status]);
    }

    public function submitInvoice(Request $request)
    {
        $Stock_data = new StockHandler();
        //dd($request);
        $data = $request->except('_token', 'orderid');

        foreach ($data as $key => $value) {
            $Stock_data->addToArray($key, $value);
        }

        $arr = $Stock_data->returnArr();
        $arrSerialized = serialize($arr);

        DB::table('orders')
            ->where('id', $request->orderid)
            ->update(['issued' => 1, 'invoice' => $arrSerialized]);
        $order = DB::table('orders')->select('email', 'added')->where('id', $request->orderid)->get();

        $users = DB::table('users')->select('name', 'email', 'phone_no')->where('email', $order[0]->email)->get();
        //dd($order);

        $pdf = PDF::loadView('pdf.invoice', array('arr' => $arr, 'id' => $request->orderid, 'user_info' => $users, 'order' => $order));
        return $pdf->download('invoice.pdf');
        return redirect()->route('stockmanager.index');
    }

    public function addToFB(Request $request)
    {
        $proid = $request['body'];

        $order = DB::table('orders')
            ->where('id', '=', $proid)
            ->get();

        $email = $order[0]->email;

        $user_info = DB::table('users')
            ->where('email', '=', $email)
            ->get();

        $addr = $user_info[0]->addr_line1 . " , " . $user_info[0]->addr_line2 . " , " . $user_info[0]->addr_city;
        $phone = $user_info[0]->phone_no;
        $name = $user_info[0]->name;
        $lat = $user_info[0]->lati;
        $lon = $user_info[0]->longi;


        return response()->json(['addr' => $addr, 'phone' => $phone, 'name' => $name, 'lat' => $lat, 'long' => $lon], 200);
    }

    public function crit_stock_msg(Request $request)
    {
        $msg = $request->model;

        Nexmo::message()->send([
            'to' => '94775635458',
            'from' => 'StockManager',
            'text' => $msg,
        ]);

        return view('stockmanager.index');
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
}
