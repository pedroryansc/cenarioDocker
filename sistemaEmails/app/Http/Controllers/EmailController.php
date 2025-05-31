<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use App\Models\User;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = Email::all();

        foreach($emails as $email){
            $email->remetente = User::find($email->remetente_id);
            $email->destinatario = User::find($email->destinatario_id);
        }

        return view("email.index")->with("emails", $emails);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("email.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $email = new Email();

        $email->remetente_id = User::where("email", $request->input("remetente"))->get()->first()->id;
        $email->destinatario_id = User::where("email", $request->input("destinatario"))->get()->first()->id;
        $email->assunto = $request->input("assunto");
        $email->mensagem = $request->input("mensagem");

        $email->save();

        return redirect()->route("email.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $email = Email::find($id);

        $email->remetente = User::find($email->remetente_id);
        $email->destinatario = User::find($email->destinatario_id);

        return view("email.show")->with("email", $email);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $email = Email::find($id);

        $email->delete();

        return redirect()->route("email.index");
    }
}
