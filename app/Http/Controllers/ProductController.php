<?php

namespace App\Http\Controllers;

use App\Desktop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

}
