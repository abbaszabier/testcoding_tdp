<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class AdminCOntroller extends Controller
{
    public function index(){
        $tikets = Tiket::all();
        return view('admin.dashboard', compact('tikets'));
    }
}