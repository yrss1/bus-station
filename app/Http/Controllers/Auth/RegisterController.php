<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->first_name,
            'last_name' =>$request->last_name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        Auth::login($user);
        return redirect('/');
    }
}
