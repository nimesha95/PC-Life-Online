<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex()
    {
        return view('admin.index');
    }

    public function getReports()
    {
        return view('admin.reports');
    }

    public function postRegUser(Request $request)
    {

        session(['AdminRegUser' => 1]);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email | required | unique:users',
            'password' => 'required | min:4',
            'role' => 'required'
        ]);


        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
            'role_name' => $this->getRoleName($request->input('role')),
        ]);
        $user->save();
        return redirect()->back();

    }

    private function getRoleName($var)
    {
        if ($var == 0) {
            return 'Administrator';
        } elseif ($var == 1) {
            return 'User';
        } elseif ($var == 2) {
            return 'StockManager';
        } elseif ($var == 3) {
            return 'Cashier';
        } else {
            return 'Technician';
        }
    }
}
