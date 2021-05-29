<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    public function index()
    {
    	
    	$anggota = DB::table('anggota')
            ->rightJoin('pinjam', 'anggota_id', '=', 'anggota.anggota_id')
            ->get(); 

    	return view('join',['anggota' => $anggota]);

    }
}
