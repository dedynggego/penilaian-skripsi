<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnValue;

class DosenController extends Controller
{
    public function index(){
        $dosens = User::orderBy('name')->get();
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
        return redirect('dosen')->with('success', 'Data berhasil ditambahkan');
        // dd(Auth::user()->id);
    }

    public function edit($id){
        $dosen = User::findorfail($id);
        $user = Auth::user();
        return view('layout.edit_dosen')->with([
            'dosen'=> $dosen,
            'user'=>$user,
        ]);
    }

    public function update(Request $request, $id){
        $dosen = User::findorfail($id);

        $dosen->name = $request->name;
        $dosen->nidn = $request->nidn;
        $dosen->email = $request->email;
        $dosen->username = $request->username;
        $dosen->level = $request->level;

        $dosen->save();

        return redirect('dosen')->with('success', 'Data berhasil diperbaharui');
    }

    public function destroy($id){
        $dosen = User::findorfail($id);
        $dosen->delete();
        return redirect('dosen')->with('success', 'Data berhasil dihapus');
    }
}
