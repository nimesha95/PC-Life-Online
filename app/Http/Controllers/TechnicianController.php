<?php

namespace App\Http\Controllers;

use PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tech;

class TechnicianController extends Controller
{

    public function submitInvoice(Request $request)
    {
        //dd($request);
        $Jobid = $request->input('jobid');

        //dd($Jobid);
        $pdf = PDF::loadView('pdf.invoiceRepair', array('Jobid' => $Jobid));
        //dd($pdf);
        return $pdf->download('invoice.pdf');

    }

    public function dashqarray()
    {
        $qarray = DB::select("SELECT * FROM job where status='On going' LIMIT 5 ");
        $qarray1 = DB::select("SELECT * FROM job where status='Completed' LIMIT 5 ");
        $qarray2 = DB::select("SELECT * FROM job where type='Company Warranty' LIMIT 5 ");
    }

    public function getIndex()
    {
        $qarray = DB::select("SELECT * FROM job where status='On going' LIMIT 5 ");
        $qarray1 = DB::select("SELECT * FROM job where status='Completed' LIMIT 5 ");
        $qarray2 = DB::select("SELECT * FROM job where jobtype='Company Warranty' LIMIT 5 ");
        return view('technician.index', compact('qarray', 'qarray1', 'qarray2'));


    }

    public function custom($type)
    {


        if ($type == 'DQ') {
            $Custtype = 'Desktop';
            $Type = 'Question';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");


            return view('technician.customize', compact('qarray', 'Type', 'Custtype'));
        } elseif ($type == 'LQ') {
            $Custtype = 'Laptop';
            $Type = 'Question';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");


            return view('technician.customize', compact('qarray', 'Type', 'Custtype'));
        } elseif ($type == 'TQ') {
            $Custtype = 'Tablet';
            $Type = 'Question';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");


            return view('technician.customize', compact('qarray', 'Type', 'Custtype'));
        } elseif ($type == 'OQ') {
            $Custtype = 'Other';
            $Type = 'Question';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");


            return view('technician.customize', compact('qarray', 'Type', 'Custtype'));
        } elseif ($type == 'DA') {
            $Custtype = 'Desktop';
            $Type = 'Device Acc';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");


            return view('technician.customize', compact('qarray', 'Type', 'Custtype'));
        } elseif ($type == 'LA') {
            $Custtype = 'Laptop';
            $Type = 'Device Acc';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");


            return view('technician.customize', compact('qarray', 'Type', 'Custtype'));
        } elseif ($type == 'TA') {
            $Custtype = 'Tablet';
            $Type = 'Device Acc';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");


            return view('technician.customize', compact('qarray', 'Type', 'Custtype'));
        } elseif ($type == 'OA') {
            $Custtype = 'Other';
            $Type = 'Device Acc';
            $qarray = DB::select("select * from customize where (type='" . $Type . "' and device='" . $Custtype . "' )");


            return view('technician.customize', compact('qarray', 'Type', 'Custtype'));
        } else {


        }


    }

    public function Newjob($type)
    {


        if ($type == 'D') {
            $Device = 'Desktop';
            $qarray = DB::select("SELECT `id` FROM job WHERE `id` = (SELECT MAX(id) FROM job);");


            return view('technician.Newjob', compact('qarray', 'Device'));
        } elseif ($type == 'L') {
            $Device = 'Laptop';
            $qarray = DB::select("SELECT `id` FROM job WHERE `id` = (SELECT MAX(id) FROM job);");


            return view('technician.Newjob', compact('qarray', 'Device'));
        } elseif ($type == 'T') {
            $Device = 'Tablet';
            $qarray = DB::select("SELECT `id` FROM job WHERE `id` = (SELECT MAX(id) FROM job);");


            return view('technician.Newjob', compact('qarray', 'Device'));
        } elseif ($type == 'O') {
            $Device = 'Other';
            $qarray = DB::select("SELECT `id` FROM job WHERE `id` = (SELECT MAX(id) FROM job);");


            return view('technician.Newjob', compact('qarray', 'Device'));
        } else {


        }


    }

    public function NewjobStore(Request $request)
    {

        //dd($request);
        //load user Register quarry

        $Jobid = $request->input('Jobid');
        $device = $request->input('device');
        $Serial = $request->input('Serial');
        $condition = $request->input('condition');
        $Problem = $request->input('Problem');

        $Type = 'Question';
        $qarray = DB::select("select * from customize where (type='" . $Type . "'  and device='" . $device . "')");

        DB::table('job')
            ->Insert(['jobid' => $Jobid, 'SerialNo' => $Serial, 'device' => $device, 'Condition' => $condition, 'Problem' => $Problem, 'status' => 'On going', 'jobtype' => 'Repair', 'invoiceno' => $Jobid]);

        //Return to questioner
        return view('technician.Question', compact('Jobid', 'device', 'Type', 'qarray'));
    }

    public function customtask()
    {
        $qarray = DB::select("select * from tasks ");


        return view('technician.ctsk', compact('qarray', 'name'));


    }

    public function userreg()
        //load user Register View
    {
        return view('technician.RegUser');
    }

    public function userregform(Request $request)
    {


        //load user Register quarry
        $Name1 = $request->input('Name1');
        $Name2 = $request->input('Name2');
        $email = $request->input('email');
        $Telno = $request->input('Telno');
        $Address1 = $request->input('Address1');
        $Address2 = $request->input('Address2');
        $role = 1;
        $role_type = 'user';
        $pw = '1234';
        $name = $Name1 . ' ' . $Name2;
        $Telno = substr($Telno, 1);
        $Telno = '94' . $Telno;
        $pw = bcrypt('12345678');

        DB::table('users')
            ->Insert(['Name' => $name, 'email' => $email, 'password' => $pw, 'role' => $role, 'role_name' => $role_type, 'addr_line1' => $Address1, 'addr_line2' => $Address2, 'addr_line1' => $Address1, 'phone_no' => $Telno]);
        return view('technician.RegUser');
    }

    public function deviceacc()
    {
        $Invoice = 'LR11122332';
        $device = 'Laptop';
        $Type = 'Device Acc';
        $qarray = DB::select("select * from customize where (type='" . $Type . "'  and device='" . $device . "')");
        return view('technician.Deviceacc', compact('qarray', 'Type', 'device', 'Invoice'));


    }

    public function devQ()
    {


        $qarray = DB::select("select * from customize where (type='" . $Type . "'  and device='" . $device . "')");
        return view('technician.Question', compact('qarray', 'Type', 'device', 'Invoice'));


    }

    public function store(Request $request)
    {
        //dd($request);
        $d1 = $request->input('D1');
        $d2 = $request->input('D2');
        $d3 = $request->input('D3');

        DB::table('customize')
            ->where([['device', '=', 'Desktop'], ['Type', '=', 'Question']])
            ->update(['D1' => $d1, 'D2' => $d2, 'D3' => $d3]);


        $item = 'hello';
        return view('technician.index', ['items' => $item]);

    }

    public function viewwarranty(Request $request)
    {
        ($request);
        $Invoice = $request->input('Invoice');
        $qarray = DB::select("select * from orders where id='" . $Invoice . "' ");
        //dd($qarray);

        $cart = $qarray[0]->order_obj;
        $cart = unserialize($cart);

        $warrenty = $qarray[0]->invoice;
        $warrenty = unserialize($warrenty);

        $waren = array();
        foreach ($warrenty as $war) {
            array_push($waren, $war);
        }
        //dd($cart);
        $item = 'hello';
        return view('technician.viewwarranty', ['cart' => $cart, 'warrenty' => $waren]);

    }

    public function custstore(Request $request)
    {
        //dd($request);
        $d1 = $request->input('D1');
        $d2 = $request->input('D2');
        $d3 = $request->input('D3');
        $d4 = $request->input('D4');
        $d5 = $request->input('D5');
        $d6 = $request->input('D6');
        $d7 = $request->input('D7');
        $d8 = $request->input('D8');
        $d9 = $request->input('D9');
        $d10 = $request->input('D10');
        $d11 = $request->input('D11');
        $d12 = $request->input('D12');
        $d13 = $request->input('D13');
        $d14 = $request->input('D14');
        $d15 = $request->input('D15');
        $d16 = $request->input('D16');
        $d17 = $request->input('D17');
        $d18 = $request->input('D18');
        $d19 = $request->input('D19');
        $d20 = $request->input('D20');
        $device = $request->input('device');
        $type = $request->input('type');

        DB::table('customize')
            ->where([['device', '=', $device], ['type', '=', $type]])
            ->update(['D1' => $d1, 'D2' => $d2, 'D3' => $d3, 'D4' => $d4, 'D5' => $d5, 'D6' => $d6, 'D7' => $d7, 'D8' => $d8, 'D9' => $d9, 'D10' => $d10, 'D11' => $d11, 'D12' => $d12, 'D13' => $d13, 'D14' => $d14, 'D15' => $d15, 'D16' => $d16, 'D17' => $d7, 'D18' => $d8, 'D19' => $d19, 'D20' => $d20]);


        $qarray = DB::select("SELECT * FROM job where status='On going' LIMIT 5 ");
        $qarray1 = DB::select("SELECT * FROM job where status='Completed' LIMIT 5 ");
        $qarray2 = DB::select("SELECT * FROM job where jobtype='Company Warranty' LIMIT 5 ");
        return view('technician.index', compact('qarray', 'qarray1', 'qarray2'));


    }

    public function custtask(Request $request)
    {
        //dd($request);
        $id = $request->input('id');
        $name = $request->input('name');
        $DOPT = $request->input('DOPT');
        $DINT = $request->input('DINT');
        $price = $request->input('price');
        $usage = $request->input('Select');
        DB::table('tasks')
            ->where('id', $id)
            ->update(['Name' => $name, 'DOPT' => $DOPT, 'DINT' => $DINT, 'price' => $price, 'used' => $usage]);

        $qarray = DB::select("select * from tasks ");
        return view('technician.ctsk', compact('qarray', 'name'));


    }

    public function addnewtask(Request $request)
    {
        //dd($request);

        $name = $request->input('name');
        $DOPT = $request->input('DOPT');
        $DINT = $request->input('DINT');
        $price = $request->input('price');
        $usage = $request->input('Select');
        DB::table('tasks')
            ->Insert(['Name' => $name, 'DOPT' => $DOPT, 'DINT' => $DINT, 'price' => $price, 'used' => $usage]);

        $qarray = DB::select("select * from tasks ");
        return view('technician.ctsk', compact('qarray', 'name'));


    }

    public function addReview(Request $request)
    {
        //dd($request);
        $type = $request->input('type');
        $device = $request->input('device');
        $jobid = $request->input('jobid');
        $d1 = $request->input('D1');
        $d1c = $request->input('D1c');
        $d2 = $request->input('D2');
        $d2c = $request->input('D2c');
        $d3 = $request->input('D3');
        $d3c = $request->input('D3c');
        $d4 = $request->input('D4');
        $d4c = $request->input('D4c');
        $d5 = $request->input('D5');
        $d5c = $request->input('D5c');

        if ($d1 != 'NA') {
            if ($d1c == 'Yes') {
                $d1 = $d1 . ' - ' . $d1c;
            }

        }
        if ($d2 != 'NA') {
            if ($d2c == 'Yes') {
                $d2 = $d2 . ' - ' . $d2c;
            }

        }
        if ($d3 != 'NA') {
            if ($d3c == 'Yes') {
                $d3 = $d3 . ' - ' . $d3c;
            }

        }
        if ($d4 != 'NA') {
            if ($d4c == 'Yes') {
                $d4 = $d4 . ' - ' . $d4c;
            }

        }
        if ($d5 != 'NA') {
            if ($d5c == 'Yes') {
                $d5 = $d5 . ' - ' . $d5c;
            }

        }


        DB::table('devq')
            ->Insert(['invoice' => $jobid, 'Type' => $type, 'Q1' => $d1, 'Q2' => $d2, 'Q3' => $d3, 'Q4' => $d4, 'Q5' => $d5]);
        if ($type == 'Device Acc') {
            $device = $request->input('device');
            $qarray = DB::select("select * from tasks ");
            $qarray1 = DB::select(" select * from tasks where id in (select taskid from jobtask where jobid='" . $jobid . "' )");
            return view('technician.Newtask', compact('qarray', 'qarray1', 'type', 'device', 'jobid'));
            //where id='" . $Invoice . "'
        }


        $type = 'Device Acc';
        $qarray = DB::select("select * from customize where (type='" . $type . "'  and device='" . $device . "')");

        return view('technician.Deviceacc', compact('qarray', 'type', 'device', 'jobid'));


    }

    public function Addtsktojob(Request $request)
    {
        //dd($request);
        $type = $request->input('type');
        $device = $request->input('device');
        $taskid = $request->input('taskid');
        $jobid = $request->input('jobid');
        $status = '0';
        DB::table('jobtask')
            ->Insert(['jobid' => $jobid, 'taskid' => $taskid, 'status' => $status]);

        $qarray = DB::select("select * from tasks ");
        $qarray1 = DB::select(" select * from tasks where id in (select taskid from jobtask where jobid='" . $jobid . "' )");
        //dd($qarray1);
        return view('technician.Newtask', compact('qarray', 'qarray1', 'type', 'device', 'jobid'));
    }

    public function Deletetsktojob(Request $request)
    {
        //dd($request);
        $type = $request->input('type');
        $device = $request->input('device');
        $taskid = $request->input('taskid');
        $jobid = $request->input('jobid');
        DB::table('jobtask')->where([['taskid', '=', $taskid] and ['jobid', '=', $jobid]])->delete();

        $qarray = DB::select("select * from tasks ");
        $qarray1 = DB::select(" select * from tasks where id in (select taskid from jobtask where jobid='" . $jobid . "' )");
        //dd($qarray1);
        return view('technician.Newtask', compact('qarray', 'qarray1', 'type', 'device', 'jobid'));
    }

    public function confrimtsktojob(Request $request)
    {
        //dd($request);
        $type = $request->input('type');
        $device = $request->input('device');
        $taskid = $request->input('taskid');
        $jobid = $request->input('jobid');
        $DTOP = $request->input('DTOP');
        $DINT = $request->input('DINT');
        $cost = $request->input('cost');
        DB::table('job')
            ->where('jobid', $jobid)
            ->update(['totaltime' => $DTOP, 'price' => $cost]);


        return view('technician.adduserdetails', compact('jobid', 'device'));
    }

    //add customer on forum
    public function Addcustomer(Request $request)
    {
        //dd($request);
        $type = $request->input('type');
        $device = $request->input('device');

        $jobid = $request->input('jobid');
        $name = $request->input('name');
        $contact = $request->input('contact');


        DB::table('job')
            ->where('jobid', $jobid)
            ->update(['user' => $name, 'telno' => $contact]);
        $qarrayj = DB::select("select * from job where jobid='" . $jobid . "' ");
        $qarrayq = DB::select("select * from devq where (Type='Question'  and invoice='" . $jobid . "')");
        $qarraya = DB::select("select * from devq where (Type='Device Acc'  and invoice='" . $jobid . "')");
        $qarrayt = DB::select(" select * from tasks where id in (select taskid from jobtask where jobid='" . $jobid . "' )");


        return view('technician.JobOk', compact('qarrayj', 'qarrayq', 'qarraya', 'qarrayt', 'jobid'));
    }

    public function viewjob(Request $request)
    {
        //dd($request);
        $jobid = $request->input('Jobid');
        $qarrayj = DB::select("select * from job where jobid='" . $jobid . "' ");
        $qarrayq = DB::select("select * from devq where (Type='Question'  and invoice='" . $jobid . "')");
        $qarraya = DB::select("select * from devq where (Type='Device Acc'  and invoice='" . $jobid . "')");
        $qarrayt = DB::select(" select * from tasks where id in (select taskid from jobtask where jobid='" . $jobid . "' )");


        //dd($qarrayj);
        return view('technician.viewjob', compact('qarrayj', 'qarrayq', 'qarraya', 'qarrayt', 'jobid'));
    }

}



