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

    public function getDesktops($type)
    {
        $items = DB::select("select * from desktops where type='".$type."'");
       // $desktops = Desktop::all();
        return view('shop.product',['items'=>$items]);
    }

}
