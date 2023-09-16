<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('auth.sign-in', [
            'title' => 'sign-in'
        ]);
    }

    public function login(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $password = hash('sha3-256', $password);

        $user_data = $user->authentication($username, $password);
        if (!$user_data) {
            // ...
            return redirect()->route('login');
        }
        [$user_data] = $user_data;

        session(['user' => $user_data]);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
