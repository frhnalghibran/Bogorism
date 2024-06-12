<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function login(Request $request) {
        $data = $request->validate([
           'username' => 'required',
           'password' => 'required' 
        ]);
        
        if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']])) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect('/admin');
            } elseif ($user->role == 'user') {
                return redirect('/');   
            } else {
                Auth::logout();
                return redirect('/login')->with('error', 'Invalid role.');
            }
        }
        return redirect()->back()->with('error', 'Invalid username or password');
    }

    public function logout (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register (Request $request) {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required' 
        ]);
        $user = new User();
        $user->username=$request->username;
        $user->password=Hash::make($request->password);
        $user->role= 'user';
        $user->save();
        return redirect('/login');
    }

    public function showLoginForm() {
        return view('auth.login');
    }

}
