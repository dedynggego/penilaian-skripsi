<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function index(){
        $dosens = User::all();
        $user = Auth::user();
        return view('layout.dosen')->with([
            'dosens' => $dosens,
            'user' => $user,
        ]);
    }

    public function create(){
        $user = Auth::user();
         return view('layout.tambah-dosen')->with([
            'user'=>$user,
         ]);
    }

    public function store(Request $request){
        $user = new User;
        $request->validate([
            'name' => 'required',
            'nidn'=>'required',
            'email' => 'required|email',
            'username'=>'required|unique:users,username',
            'password' => 'required|min:4',
            'level' => 'required',
        ]);
        $user->name = $request->name;
        $user->nidn = $request->nidn;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();
        return redirect('data-dosen');
        // dd(Auth::user()->id);
    }
}
