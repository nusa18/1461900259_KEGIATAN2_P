<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LikeController extends Controller
{
    public function index()
    {
    	$anggota = DB::table('anggota')
            ->where('anggota_alamat', 'LIKE', '%s%')
            ->get(); 

    	return view('like',['anggota' => $anggota]);

    }
}
