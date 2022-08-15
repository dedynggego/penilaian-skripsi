<?php

namespace App\Http\Controllers;

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
}
