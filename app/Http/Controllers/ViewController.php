<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home(Request $request) {
        $session_avaiable = $request->session()->has('username') ? true : false;
        return view('home', compact('session_avaiable'));
    }

    public function result(Request $request) {
        if ($request->session()->has('username')) {
            $username = $request->session()->get('username');
            $is_qualified = $request->session()->get('is_qualified');

            if($is_qualified == true) {
                return view('result.qualified', compact('username', 'is_qualified'));
            }else {
                return view('result.disqualified', compact('username', 'is_qualified'));
            }
            
        }else {
            return redirect()->route('home')->with('error', 'Kamu belum login, silahkan login terlebih dahulu');
        }
    }
}