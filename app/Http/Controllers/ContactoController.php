<?php

namespace App\Http\Controllers;
use DB;
use Validator;
use App\User;
use App\Mail\MailContact;
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
      'comentarios' => 'required|regex:/^[A-Z0-9 áéíóúÁÉÍÓÚñÑ¿?()!¡;,.]+$/i'
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
      $email = 'arpegius_uni_05@hotmail.com';
      $em_data = array(
        'asunto' => 'Contacto GCC-Site', 
        'titulo' => '¡Hemos tenido una visita!', 
        'nombre' => $request->nombre, 
        'email' => $request->email, 
        'comentarios' => $request->comentarios,
      );
      //
      try {
        Mail::to($email)->send(new MailContact($em_data));
        return response()->json([
          "estatus" => '1', 
          "msg" => "<p>Se ha enviado la información que proporcionaste. A la brevedad nos podremos en contacto contigo.</p><p>Muchas gracias por tus comentarios</p>"
        ]);
      } 
      catch (Exception $e) {
        return response()->json([
          "estatus" => '2', 
          "msg" => "<p>Ha ocurrido un error al intentar mandar el correo. Por favor verifique la información de los campos e intentelo de nuevo.</p>"
        ]);
      } 
    }
  }
}
