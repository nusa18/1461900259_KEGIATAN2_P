<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AnggotaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$anggota = DB::table('anggota')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['anggota' => $anggota]);

    }
}
