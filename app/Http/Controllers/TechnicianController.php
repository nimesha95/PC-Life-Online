<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    public function getIndex()
    {
        return view('technician.index');
    }
    public function getTodo()
    {
        return view('technician.todo');
    }
}
