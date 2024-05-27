<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'

        ]);

        // metode biasa enkripsi password
        $validatedData['password'] = bcrypt($validatedData['password']);
        // metode hash enskripsi password
        // $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // notif berhasil
        // $request->session()->flash('success', 'Regist Berhasil, Silahkan Login');
        return redirect('/login')->with('success', 'Regist Berhasil, Silahkan Login');;
    }
}
