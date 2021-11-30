<?php

namespace App\Http\Controllers;

use Iluminate\Auth\Events\Validated;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
        'title' => 'Register'
        ]);
    }

    public function store (Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3max:255|unique:users',
            'email'=>'email:dns|unique:users',
            'password'=>'required|min:5|max255'
        ]);
        $validatedData['password']=Hash::make($validatedData['password']);
    
        User::create($validatedData);
        return redirect('/login')->with('sukses', 'Resgister berhasil, Login Lah!');
    }
}
