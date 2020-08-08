<?php

namespace App\Http\Controllers;
use DB;
use Validator;
use App\User;
//use App\Mail\EmailAU;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
  //protected $db_intranet;
  //
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function contacto(Request $request){
    $rules = array(
      'nombre' => 'required|regex:/^[A-Z áéíóúÁÉÍÓÚñÑ.]+$/i',
      'email' => 'required|email',
      'comentarios' => 'required|regex:/^[A-Z0-9 áéíóúÁÉÍÓÚñÑ¿?()!¡;.]+$/i'
    );
    $validator = Validator::make($request->all(), $rules);
    //
    if($validator->fails()){
      foreach ($validator->messages()->getMessages() as $field_name => $messages){
        $ejason[$field_name]=$messages;
      }
      return response()->json([
        "estatus" => '0', 
        "msg" => $ejason
      ]);
    }
    else{
      return response()->json([
        "estatus" => '1', 
        "msg" => "Ok is good"
      ]);
    }
  }
}
