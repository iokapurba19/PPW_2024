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
    
    public function insertdata(Request $request)
    {   
        // dd($request->all());
        StrukturBEM::create($request->all());
        return redirect()->route('strukturbem');
    }

    

}
