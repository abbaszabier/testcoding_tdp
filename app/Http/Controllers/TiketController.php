<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index(){
        return view('tiket.form');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required|numeric',
            'tiket' => 'required|numeric|min:1|max:1'
        ]);

        $tiket = Tiket::create($validateData);

        return view('tiket.success', ['tiket'=> $tiket]);
    }
}