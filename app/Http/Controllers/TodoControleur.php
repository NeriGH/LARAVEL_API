<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoControleur extends Controller
{
    public function todo(){
        return view('todo', []);
    }

    public function listTodo(Request $request){
        // Retourne à l'utilisateur le template nommés « monLayout » avec dedans une variable nommé `$todos` qui contiendra l'ensemble des éléments dans la table
        // Votre template devra utiliser cette variable avec par exemple un @foreach($todos as $todo) … @endforeach
        return $pog = Todo::all();
      }

    public function addTodo(Request $request){
        Todo::create($request->all());
        return redirect("/todo");
    }
    
      
}
