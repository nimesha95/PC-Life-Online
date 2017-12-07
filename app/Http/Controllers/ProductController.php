<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use \Cart as Cart;
use Auth;
use App\Order;
use App\Item_info;

class ProductController extends Controller
{
    public function getIndex()
    {
        $items = DB::select("SELECT * FROM desktops ORDER BY created_at DESC LIMIT 5");

        $items2 = DB::select("SELECT * FROM laptops ORDER BY created_at DESC LIMIT 5");

        $items3 = DB::select("SELECT * FROM accessories ORDER BY created_at DESC LIMIT 5");
        return view('shop.index', ['items' => $items, 'items2' => $items2, 'items3' => $items3]);
    }

    public function showItem($id)
    {
        $table = $this->selectItemType($id);
        $item = DB::select("select * from " . $table . " where proid='" . $id . "'");

        $specs = new Item_info();

        $specs = $item[0]->itemDetails;
        $specs = unserialize($specs);

        $specs_arr = $specs->returnArr();

        //dd($specs_arr['gui']);

        return view('shop.show', ['items' => $item, 'specs' => $specs_arr]);
    }

    public function getCart()
    {
        return view('shop.cart');
    }

    public function getDesktops($type, $brand = null)
    {
        if ($brand == null) {
            $items = DB::select("select * from desktops where type='" . $type . "'");
        } else {
            //$items = DB::select("select * from desktops where type='"new\" and brand= \"Lenovo\" ");
            $items = DB::select("select * from desktops where type='" . $type . "' and brand='" . $brand . "'");
        }
        return view('shop.product', ['items' => $items, 'sidebar' => 'desktop_sbar']);
    }

    public function getLaptops($type, $brand = null)
    {
        if ($brand == null) {
            $items = DB::select("select * from laptops where type='" . $type . "'");
        } else {
            $items = DB::select("select * from laptops where type='" . $type . "' and brand='" . $brand . "'");
        }
        return view('shop.product', ['items' => $items, 'sidebar' => 'laptop_sbar']);
    }

    public function getAcc($type)
    {
        $brandArr = ["Motherboard", "Ram", "Processor", "Hard_Drive", "Casings", "Monitors", "Mouse", "Keyboard", "VGA_Cards", "Coolers", "Power_Supply",
            "Mass_Storage", "Speakers", "Memory_Cards", "Optical_Drives", "Cables", "UPS", "Network_Devices", "Printer", "Scanner", "Laptop_Acc",
            "Converters", "Softwares", "Virus_Guard", "Smart_Watch", "Tablet", "Other"];

        if (in_array($type, $brandArr)) {
            $items = DB::select("select * from accessories where catagory='" . $type . "'");
            return view('shop.product', ['items' => $items, 'sidebar' => 'laptop_sbar']);
        } else {
            return view('shop.not_found');
        }
    }

    public function getAddToCart($id, Request $request)
    {
        $table = $this->selectItemType($id);
        $item = DB::select("select * from " . $table . " where proid='" . $id . "'");
        // $item = DB::select("select * from laptops where proid='LP001'");

        $request->session()->flash('status', 'Task was successful!');


        foreach ($item as $itm) {
            $proid = $itm->proid;
            $name = $itm->name;
            $price = $itm->price;
        }
        Cart::add($proid, $name, 1, $price);    //qty is set to 1 ---- need to update dynamically later
        Cart::store(Auth::user()->email);
        return back();
    }

    public function getRemoveFromCart($count, $rowid, $curcount = null)
    {
        if ($curcount == 1) {
            Cart::remove($rowid);   //removes item if curQty is less than 1
        } elseif ($count == 1) {
            $newQty = $curcount - $count; //subtacts 1 from current Qty
            Cart::update($rowid, $newQty);
        } elseif (!strcmp('all', $count)) {
            Cart::remove($rowid);
        }
        Cart::store(Auth::user()->email);
        return redirect()->route('user.getCart');
    }

    public function getPlusOneCart($rowid, $curcount)
    {
        $newQty = $curcount + 1; //add 1 to current Qty
        Cart::update($rowid, $newQty);
        Cart::store(Auth::user()->email);
        return redirect()->route('user.getCart');
    }

    public function checkout(Request $request)
    {
        $paymentMethod = $request['paymentMethod'];
        $deliveryMethod = $request['deliveryMethod'];
        $order = new Order();
        $content = Cart::content();
        $order->addRow($content);
        $serializedContent = serialize($content);   //convert the object into a string
        $total = Cart::subtotal();
        //return response()->json(['returnURL' => $total], 200);
        DB::insert('insert into orders (email,order_obj,total,delivery,paymentType) values (?,?,?,?,?)', [Auth::user()->email, $serializedContent, $total, $deliveryMethod, $paymentMethod]);

        Cart::destroy();
        if ($paymentMethod == "pickup")    //pickup
        {
            return response()->json(['returnURL' => "www.google.lk"], 200);
        } else if ($paymentMethod == "bank")    //pickup
        {
            return response()->json(['returnURL' => "bank baibee"], 200);
        } else if ($paymentMethod == "paypal")    //pickup
        {
            return response()->json(['returnURL' => "paypal baibee"], 200);
        }

        //return redirect()->route('user.getCart');

    }

    private function selectItemType($id)
    {
        //this function is used to find the correct table to search when product id is given
        $tables = array("desktops" => "DS", "laptops" => "LP");      //this array stores the names of the tables in database

        $prefix = substr($id, 0, 2);      //all of the product types have unique prefix

        return array_search($prefix, $tables);
    }

}
