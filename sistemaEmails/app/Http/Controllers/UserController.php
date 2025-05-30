<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();

        return view("usuario.index")->with("usuarios", $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("usuario.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new User();

        $usuario->name = $request->input("name");
        $usuario->email = $request->input("email");
        $usuario->password = $request->input("password");

        $usuario->save();

        return redirect()->route("usuario.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = User::find($id);

        return view("usuario.show")->with("usuario", $usuario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = User::find($id);

        $usuario->delete();

        return redirect()->route("usuario.index");
    }
}
