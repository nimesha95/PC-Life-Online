<?php

namespace App\Http\Controllers;

use App\Desktop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use \Cart as Cart;

class ProductController extends Controller
{
    public function getIndex()
    {
        return view('shop.index');
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

        return view('shop.test');
    }

    private function selectItemType($id)
    {
        //this function is used to find the correct table to search when product id is given
        $tables = array("desktops" => "DS", "laptops" => "LP");      //this array stores the names of the tables in database

        $prefix = substr($id, 0, 2);      //all of the product types have unique prefix

        return array_search($prefix, $tables);
    }

}
