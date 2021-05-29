<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LikeJoinController extends Controller
{
    public function index()
    {
    	$anggota = DB::table('anggota')
            ->leftJoin('pinjam', 'anggota.anggota_id', '=', 'pinjam.anggota_id')
            ->where('anggota_alamat', 'LIKE', '%s%')
            ->get(); 

    	return view('join',['anggota' => $anggota]);

    }
}
