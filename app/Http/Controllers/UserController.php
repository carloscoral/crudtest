<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    function list(){
        $users = \App\User::all();
        return view('users/list', ['users' => $users]);
    }

    function new(){
        return view('users/new');
    }

    function insert(Request $req){
        $user = new \App\User;
        $user->name = $req->input('nombre');
        $user->email = $req->input('email');
        $user->password = Crypt::encrypt($req->input('pass'));
        $user->save();
        echo "Guardado <a href='".url('')."'>Regresar</a>";
    }

    function edit($id){
        $user = \App\User::find($id);
        return view('users/edit', ['user' => $user]);
    }

    function update(Request $req, $id){
        $user = \App\User::find($id);
        $user->name = $req->input('nombre');
        $user->email = $req->input('email');
        $user->password = Crypt::encrypt($req->input('pass'));
        $user->save();
        echo "Actualizado <a href='".url('')."'>Regresar</a>";
    }

    function delete($id){
        $user = \App\User::find($id);
        $user->delete();
        echo "Eliminado <a href='".url('')."'>Regresar</a>";
    }
}
