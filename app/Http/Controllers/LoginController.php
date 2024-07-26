<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        $password = $request->input('password');
        $userData = Student::where('token', $password)->first();

        if ($userData) {
            session([
                'username' => $userData->name,
                'is_qualified' => $userData->is_qualified
            ]);

            return redirect()->route('result');
        } else {
            return redirect()->route('home')->with('error', 'Tidak menemukan kredensial yang cocok');
        }
    }

    public function logout(Request $request){
        if($request->session()->has('username')){
            $request->session()->forget('username');
            $request->session()->forget('is_qualified');
        }
        return redirect()->route('home');
    }
}