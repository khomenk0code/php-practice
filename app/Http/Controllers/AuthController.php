<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller

{
    public function register(Request $request) {

      $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:3', 'confirmed'], 
        ]);


   $user = User::create($fields);

   Auth::login($user);

   return redirect()->route('home');
 
   }
}
