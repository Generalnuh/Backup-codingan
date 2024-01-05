<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Jabatan;

class HomeController extends Controller
{
    public function index()
    {
        $jmljabatan = Jabatan::count();
        $jmlpegawai = Pegawai::count();
        return view('home', [
            'jmlpegawai'=>$jmlpegawai,
            'jmljabatan'=>$jmljabatan,
        ]);
    }
}
