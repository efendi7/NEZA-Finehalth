<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view("signup_page");
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|max:255|unique:users',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:8|max:255'
        ]);
        
        User::create($validatedData);

        return redirect('/login');
    }
}
