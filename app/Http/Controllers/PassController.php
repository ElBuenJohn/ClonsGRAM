<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pass.index');
    }

    public function store(Request $request)
    {
        
        
        $request->request->add(['username'=> Str::slug($request-> username)]);

        $this->validate($request,[
            'password' => 'required|confirmed|min:8'
        ]);

         if(!auth()->attempt($request->only('password'),$request->remember))
        {
            return back()->with('mensaje','contraseña anterior Incorrecta');
        }

        //guardar cambios
         $usuario = User::find(auth()->user()->id);
        
         $usuario->password = Hash::make ($request-> password);
        $usuario->save();
        

        //redireccionar
        return redirect()->route('posts.index',$usuario->username);


    }
}
