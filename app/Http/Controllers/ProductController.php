<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use \Cart as Cart;
use Auth;
use App\Order;

class ProductController extends Controller
{
    public function getIndex()
    {
        return view('shop.index');
    }

    public function showItem($id)
    {
        $table = $this->selectItemType($id);
        $item = DB::select("select * from " . $table . " where proid='" . $id . "'");
        return view('shop.show', ['items' => $item]);
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

    public function getAddToCart($id)
    {
        $table = $this->selectItemType($id);
        $item = DB::select("select * from " . $table . " where proid='" . $id . "'");
        // $item = DB::select("select * from laptops where proid='LP001'");

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

    public function checkout()
    {
        $order = new Order();
        $content = Cart::content();
        /*
        $order->addRow($content);
        dd($content);
        */
        $serializedContent = serialize($content);
        $total = Cart::subtotal();
        DB::insert('insert into orders (email,order_obj,total) values (?,?,?)', [Auth::user()->email, $serializedContent, $total]);
        return redirect()->route('user.getCart');
    }

    private function selectItemType($id)
    {
        //this function is used to find the correct table to search when product id is given
        $tables = array("desktops" => "DS", "laptops" => "LP");      //this array stores the names of the tables in database

        $prefix = substr($id, 0, 2);      //all of the product types have unique prefix

        return array_search($prefix, $tables);
    }

}
