<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Http\Request;

class ApiControler extends Controller
{
    public function listApi(){
        return response()->json(Concert::all());
    }

    public function findApi(Request $request){
        $id = $request->input('id');
        return response()->json(Concert::find($id));
    }
    

    public function createApi(Request $request){
        $name = $request->input('name');
        $date = $request->input('date');
    
        if($name){
          $concert = new Concert();
          $concert->name = $name;
          $concert->date = $date;
          $concert->save();
          return response()->json(["status" => "success"]);
        }else{
          return response()->json(["status" => "error"]);
        }
      }

      public function editApi(Request $request){
        $id = $request->input('id');
        $concert = Concert::find($id);
        $name = $request->input('name');
        $date = $request->input('date');
        if($concert){
            $concert->name = $name;
            $concert->date = $date;
            $concert->save();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
      }

      public function deleteApi($id){
        $concert = Concert::find($id);
        if($concert){
            $concert->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }
}
