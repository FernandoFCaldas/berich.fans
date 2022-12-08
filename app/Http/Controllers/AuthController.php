<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function register(Request $request) {
        if($request->isMethod('get')) {
            return view('auth.register');
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()
        ->route('register')
        ->with('success', 'Colaborador cadastrado com sucesso!');


    }
    public function login(Request $request) {
        if($request->isMethod('get')) {
            return view('auth.login');
        }

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()
            ->route('home');
            }
            return redirect()
            ->route('login');
            
        }

        public function logout (Request $request) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return redirect()
            ->route('home');
        }

    
}
