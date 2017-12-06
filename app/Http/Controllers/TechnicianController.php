<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tech;

class TechnicianController extends Controller
{
    public function getIndex()
    {
                $item = 'hello';
        return view('technician.index', ['items' => $item]);


    }
    public function custom($type)
    {


        if($type=='DQ'){
            $Custtype = 'Desktop';
            $Type ='Question';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");



            return view('technician.customize',compact('qarray','Type','Custtype'));
        }
        elseif ($type=='LQ'){
            $Custtype = 'Laptop';
            $Type ='Question';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");



            return view('technician.customize',compact('qarray','Type','Custtype'));
        }
        elseif ($type=='TQ'){
            $Custtype = 'Tablet';
            $Type ='Question';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");



            return view('technician.customize',compact('qarray','Type','Custtype'));
        }
        elseif ($type=='OQ'){
            $Custtype = 'Other';
            $Type ='Question';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");



            return view('technician.customize',compact('qarray','Type','Custtype'));
        }
        elseif ($type=='DA'){
            $Custtype = 'Desktop';
            $Type ='Device Acc';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");



            return view('technician.customize',compact('qarray','Type','Custtype'));
        }
        elseif ($type=='LA'){
            $Custtype = 'Laptop';
            $Type ='Device Acc';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");



            return view('technician.customize',compact('qarray','Type','Custtype'));
        }
        elseif ($type=='TA'){
            $Custtype = 'Tablet';
            $Type ='Device Acc';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");



            return view('technician.customize',compact('qarray','Type','Custtype'));
        }
        elseif ($type=='OA'){
            $Custtype = 'Other';
            $Type ='Device Acc';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");



            return view('technician.customize',compact('qarray','Type','Custtype'));
        }

        else{


        }


    }
    public function customtask()
    {
        $qarray = DB::select("select * from tasks ");
        $name = 'mynname';



        return view('technician.ctsk',compact('qarray','name'));



    }
    public function store(Request $request)
    {
        //dd($request);
        $d1= $request->input('D1');
        $d2= $request->input('D2');
        $d3= $request->input('D3');
        DB::table('customize')
            ->where([['device','=', 'Desktop'],['Type','=', 'Question']] )
            ->update(['D1' => $d1,'D2' => $d2,'D3' => $d3]);


        $item = 'hello';
        return view('technician.index', ['items' => $item]);

}
}
