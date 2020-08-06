<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogosController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->db_gcc = DB::connection('gcc');
  }
  //MENU
  public function menu(){
    $menu = $this->db_gcc->table('opciones')
      ->select('id_opcion','opcion','url')
      ->get();
    return $menu->toJson();
  }
  //OPCIONES
  public function opciones(){
    $opt = $this->db_gcc->table('opciones')
      ->get();
    return $opt->toJson();
  }
  //DONE
  public function done(){
    $done = $this->db_gcc->table('metas')
      ->select('meta as title','url_img as img')
      ->where('id_tipo','=',1)
      ->get();
    return $done->toJson();
  }
  //DOING
  public function doing(){
    $doing = $this->db_gcc->table('metas')
      ->select('meta as title','url_img as img')
      ->where('id_tipo','=',2)
      ->get();
    return $doing->toJson();
  }
  //TODO
  public function todo(){
    $todo = $this->db_gcc->table('metas')
      ->select('meta as title','url_img as img')
      ->where('id_tipo','=',3)
      ->get();
    return $todo->toJson();
  }
  //ESCUELAS
  public function escuelas(){
    $esc = $this->db_gcc->table('escuelas')
      ->orderBy('id_escuela', 'desc')
      ->get();
    return $esc->toJson();
  }

}
