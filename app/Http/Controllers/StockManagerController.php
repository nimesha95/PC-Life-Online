<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item_info;
use Illuminate\Support\Facades\DB;
use Mail;
use \Cart as Cart;
use App\cashier;
use Nexmo\Laravel\Facade\Nexmo;
use SnappyImage;

class StockManagerController extends Controller
{
    public function getIndex()
    {
        /*
                Nexmo::message()->send([
                    'to'   => '94775635458',
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
        $type = $request['ItemType1'];
        $brand = $request['ItemModel1'];
        $product = $request['productSelect'];

        $table = $this->getTable($type);
        $itemProid = DB::select("select proid from $table WHERE 1");
        foreach ($itemProid as $row) {
            $proid = $row->proid;
        }

        return view('stockmanager.add_stock', ["brand" => $brand, "product" => $product, "proid" => $proid]);
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

        //dd(Cart::subtotal());

        return view('stockmanager.viewOrder');
    }

    public function check_orders(Request $request)
    {
        $msg = $request['body'];

        $orders_to_process = DB::select("select id,email,total,added from orders WHERE paid=1 AND delivery=0");

        return response()->json(['msg' => $orders_to_process], 200);
    }

    public function check_deli_orders(Request $request)
    {
        $msg = $request['body'];

        $orders_to_process = DB::select("select id,email,total,added from orders WHERE paid=1 AND delivery=1");

        return response()->json(['msg' => $orders_to_process], 200);
    }

    public function AddStock(Request $request)
    {
        $proid = $request['proid'];
        $sno = $request['serialNo'];

        DB::table('items')->insert(
            ['sno' => $sno, 'proid' => $proid]
        );

        return response()->json(['msg' => "hello there"], 200);
    }

    public function fillDrop(Request $request)
    {
        if ($request['type'] == 'model') {

            $catagory = $request['body'];
            $table = $this->getTable($catagory);

            $itemBrand = DB::select("select DISTINCT brand from $table WHERE 1");
            foreach ($itemBrand as $row) {
                $brand_arr[] = array("id" => $row->brand);
            }
            return response()->json(['msg' => $brand_arr], 200);
        } else if ($request['type'] == 'product') {
            $product = $request['body'];
            $cat = $request['cat'];
            $table = $this->getTable($cat);

            $ProductList = DB::select("select name from $table WHERE brand='$product'");
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

    public function submitInvoice(Request $request)
    {
        dd($request);
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
