<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\UserModel;

class holaController extends Controller
{
    public function index(){
      $table = user::all();
    }
    public function first($id){
      $foo = array();
      for ($i=0; $i < $id; $i++) {
        $foo[$i] = $i;
      }
      return view('hola')->with('id', $foo);
    }
}
