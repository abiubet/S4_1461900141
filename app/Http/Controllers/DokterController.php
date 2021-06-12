<?php

namespace App\Http\Controllers;

use App\Imports\DokterImport;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DokterController extends Controller
{
    public function index()
    {
        $data = Dokter::get();
        return view("home-0141", compact('data'));
    }

    public function import(Request $request)
    {
        Excel::import(new DokterImport, $request->file);
        return redirect('/');
    }
}
