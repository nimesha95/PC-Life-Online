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




        return view('technician.ctsk',compact('qarray','name'));



    }
    public function deviceacc()
    {
        $Invoice = 'LR11122332';
        $device = 'Laptop';
        $Type ='Device Acc';
        $qarray = DB::select("select * from customize where (type='" . $Type . "'  and device='" . $device . "')");
        return view('technician.Deviceacc',compact('qarray','Type','device','Invoice'));



    }
    public function devQ()
    {
        $Invoice = 'LR11122332';
        $device = 'Laptop';
        $Type ='Question';
        $qarray = DB::select("select * from customize where (type='" . $Type . "'  and device='" . $device . "')");
        return view('technician.Question',compact('qarray','Type','device','Invoice'));



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
    public function custstore(Request $request)
    {
      //dd($request);
        $d1= $request->input('D1');
        $d2= $request->input('D2');
        $d3= $request->input('D3');
        $d4= $request->input('D4');
        $d5= $request->input('D5');
        $d6= $request->input('D6');
        $d7= $request->input('D7');
        $d8= $request->input('D8');
        $d9= $request->input('D9');
        $d10= $request->input('D10');
        $d11= $request->input('D11');
        $d12= $request->input('D12');
        $d13= $request->input('D13');
        $d14= $request->input('D14');
        $d15= $request->input('D15');
        $d16= $request->input('D16');
        $d17= $request->input('D17');
        $d18= $request->input('D18');
        $d19= $request->input('D19');
        $d20= $request->input('D20');
        $device= $request->input('device');
        $type= $request->input('type');

        DB::table('customize')
            ->where([['device','=',$device],['type','=', $type]] )
            ->update(['D1' => $d1,'D2' => $d2,'D3' => $d3,'D4' => $d4,'D5' => $d5,'D6' => $d6,'D7' => $d7,'D8' => $d8,'D9' => $d9,'D10'    => $d10,'D11' => $d11,'D12' => $d12,'D13' => $d13,'D14' => $d14,'D15' => $d15,'D16' => $d16,'D17' => $d7,'D18' => $d8,'D19' => $d19,'D20' => $d20]);


        $item = 'hello';
        return view('technician.index', ['items' => $item]);

    }
    public function custtask(Request $request)
    {
        //dd($request);
        $id= $request->input('id');
        $name= $request->input('name');
        $DOPT= $request->input('DOPT');
        $DINT= $request->input('DINT');
        $price= $request->input('price');
        $usage= $request->input('Select');
        DB::table('tasks')
            ->where('id', $id )
            ->update(['Name' => $name,'DOPT' => $DOPT,'DINT' => $DINT,'price' => $price,'used' => $usage]);

        $qarray = DB::select("select * from tasks ");
        return view('technician.ctsk',compact('qarray','name'));



    }
    public function addnewtask(Request $request)
    {
        //dd($request);

        $name= $request->input('name');
        $DOPT= $request->input('DOPT');
        $DINT= $request->input('DINT');
        $price= $request->input('price');
        $usage= $request->input('Select');
        DB::table('tasks')
                        ->Insert(['Name' => $name,'DOPT' => $DOPT,'DINT' => $DINT,'price' => $price,'used' => $usage]);

        $qarray = DB::select("select * from tasks ");
        return view('technician.ctsk',compact('qarray','name'));


    }
    public function addReview(Request $request)
    {
      //dd($request);
        $type = $request->input('type');
        $invoice = $request->input('invoice');
        $d1= $request->input('D1');
        $d1c= $request->input('D1c');
        $d2= $request->input('D2');
        $d2c= $request->input('D2c');
        $d3= $request->input('D3');
        $d3c= $request->input('D3c');
        $d4= $request->input('D4');
        $d4c= $request->input('D4c');
        $d5= $request->input('D5');
        $d5c= $request->input('D5c');

        if($d1 != 'NA'){
            if($d1c =='Yes'){
                $d1= $d1 . ' - '. $d1c;
            }

        }
        if($d2 != 'NA'){
            if($d2c =='Yes'){
                $d2= $d2 . ' - '. $d2c;
            }

        }
        if($d3 != 'NA'){
            if($d3c =='Yes'){
                $d3= $d3 . ' - '. $d3c;
            }

        }
        if($d4 != 'NA'){
            if($d4c =='Yes'){
                $d4= $d4 . ' - '. $d4c;
            }

        }
        if($d5 != 'NA'){
            if($d5c =='Yes'){
                $d5= $d5 . ' - '. $d5c;
            }

        }


        DB::table('devq')
            ->Insert(['invoice' => $invoice,'Type' => $type,'Q1' => $d1,'Q2' => $d2,'Q3' => $d3,'Q4' => $d4,'Q5' => $d5]);

        $Invoice = 'LR11122332';
        $device = 'Laptop';
        $Type ='Question';
        $qarray = DB::select("select * from customize where (type='" . $Type . "'  and device='" . $device . "')");
        return view('technician.Question',compact('qarray','Type','device','Invoice'));


    }


}
