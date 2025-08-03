<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    function login(Request $request){
        
    }

    function register_user(Request $request){
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'fecha_nacimiento' => 'required',
            'tipo_documento' => 'required',
            'documento' => 'required|unique:users,documento',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,svg',
            'role' => 'required',
            'grado' => 'required',
            'password' => 'required',
        ]);
    }

    function register_docente(Request $request){
        $request->validate([
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => 'required|string|max:20',
            'fecha_nacimiento' => 'required|date',
            'tipo_documento' => 'required|in:cc,ce',
            'documento' => 'required|string|max:20|unique:users,documento',
            'asignatura' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        $imagenPath = null;
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('perfiles', 'public');
        }
    
        $user = User::create([
            'imagen' => $imagenPath,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'tipo_documento' => $request->tipo_documento,
            'documento' => $request->documento,
            'role' => 'docente',
            'asignatura' => $request->asignatura,
            'grado' => null,
            'password' => Hash::make($request->password),
        ]);
    
        Auth::login($user);
    
    }

    function logout(Request $request){
        
    }
}
