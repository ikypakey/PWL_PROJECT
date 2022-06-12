<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('index',[
            'jumlah_anggota'=> DataAnggota::count(),
            'jumlah_petugas' => User::count()
        ]);
    }
}
