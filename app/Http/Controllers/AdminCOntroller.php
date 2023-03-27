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

    public function edit($id){
        $tiket = Tiket::find($id);
        return view('admin.edit', compact('tiket'));
    }

    public function update(Request $request, $id){
    $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        'nomor_telepon' => 'required',
    ]);

    $tiket = Tiket::find($id);
    $tiket->nama = $request->get('nama');
    $tiket->email = $request->get('email');
    $tiket->nomor_telepon = $request->get('nomor_telepon');
    $tiket->save();

    return redirect('/dashboard')->with('success', 'Data pemesanan tiket berhasil diupdate.');
    }

    public function destroy(Tiket $tiket){
        $tiket->delete();
        return redirect('/dashboard')->with('success', 'Data pemesanan dihapus');;
    }
}