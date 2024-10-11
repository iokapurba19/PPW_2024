<?php

namespace App\Http\Controllers;

use App\Models\StrukturBEM; // Perbaiki pengimporan model
use Illuminate\Http\Request;

class BEMController extends Controller
{
    public function index()
    {
        $data = StrukturBEM::all(); // Ganti 'strukturbem' dengan 'StrukturBEM'
        return view('admin.StrukturBEM', compact('data'));
    }

    public function tambahdata()
    {
        return view('admin.tambahdata');
    }
    
    public function admin()
    {
        return view('admin.admin');
    }
    
    public function insertdata(Request $request)
    {   
        // dd($request->all());
        StrukturBEM::create($request->all());
        return redirect()->route('strukturbem');
    }

    public function tampilkandata($id)
    {
        $data = StrukturBEM::find($id);
        return view('admin.tampilkandata', compact('data'));
    }
    
    public function updatedata(Request $request, $id)
    {
        $data = StrukturBEM::find($id);
        $data->update($request->all());
        return redirect()->route('strukturbem')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $data = StrukturBEM::find($id);
        $data->delete();
        return redirect()->route('strukturbem')->with('success', 'Data berhasil dihapus');
    }

}
