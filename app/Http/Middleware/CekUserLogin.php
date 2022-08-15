<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CekUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$rules)
    {
        // if (Auth::check()){
        //     return redirect('login');
        // }

        // $user = Auth::user();
        // if($user -> level == $rules)
        //     return $next($request);

        //     return redirect('login')->with ('error', 'Anda tidak ada akses');

        //login 
        if(in_array($request->user()->level, $rules)){
            return $next($request);
        }

        if(Auth::user()->level==1){
            return Redirect::to('home');
        }
        elseif(Auth::user()->level==2){
            return Redirect::to('home');
        }
        elseif(Auth::user()->level==3){
            return Redirect::to('home');
        }

        // $roles = array_slice(func_get_args(), 2);

        // foreach ($roles as $role) {
        //     $user = Auth::user()->level;
        //     if ($user == $role) {
        //         return $next($request);
        //     }
        // }

        // return redirect('/');
    }
}
