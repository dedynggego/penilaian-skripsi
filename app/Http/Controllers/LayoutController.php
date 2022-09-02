<?php

namespace App\Http\Controllers;

use App\Models\Skripsi;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class LayoutController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('layout.home')->with([
            'user' => $user,
        ]);
    }

    public function dashboard(){
        $skripsi = Skripsi::where('nilai_huruf', '=', '0')->get();
        $total_skripsi = Skripsi::orderBy('tanggal', 'desc')->get();
        $user = Auth::user();

        // dd($skripsi);
        return view('layout.dashboard')->with([
            'skripsi'=>$skripsi,
            'user'=>$user,
            'total_skripsi'=>$total_skripsi,
        ]);
    }
}
