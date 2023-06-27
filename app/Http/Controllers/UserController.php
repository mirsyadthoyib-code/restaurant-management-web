<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        if (!$request->has(['username', 'password'])) {
            // ...
            return redirect()->route('login');
        }

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
