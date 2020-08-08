<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogosController extends Controller
{
  protected $db_gcc;
  //
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
  //LABORAL
  public function laboral(){
    $laborla = $this->db_gcc->table('sistemas as sis')
      ->join('empresas as em','em.id_empresa','=','sis.id_empresa')
      ->select('sis.id_sistema as id_sis', 'sis.sistema as sistema', 'sis.url_img as img', 'em.empresa as empresa')
      ->where('sis.id_proyecto','=',1)
      ->where('sis.id_fase','=',2)
      ->get();
    return $laborla->toJson();
  }
  //FREELANCE
  public function freelance(){
    $freelance = $this->db_gcc->table('sistemas as sis')
      ->join('empresas as em','em.id_empresa','=','sis.id_empresa')
      ->select('sis.id_sistema as id_sis', 'sis.sistema as sistema', 'sis.url_img as img', 'em.empresa as empresa')
      ->where('sis.id_proyecto','=',2)
      ->get();
    return $freelance->toJson();
  }
  //UNIVERSITARIO
  public function universitario(){
    $universitario = $this->db_gcc->table('sistemas as sis')
      ->join('empresas as em','em.id_empresa','=','sis.id_empresa')
      ->select('sis.id_sistema as id_sis', 'sis.sistema as sistema', 'sis.url_img as img', 'em.empresa as empresa')
      ->where('sis.id_proyecto','=',3)
      ->get();
    return $universitario->toJson();
  }
  //DESARROLLO
  public function desarrollo(){
    $desarrollo = $this->db_gcc->table('sistemas as sis')
      ->join('empresas as em','em.id_empresa','=','sis.id_empresa')
      ->select('sis.id_sistema as id_sis', 'sis.sistema as sistema', 'sis.url_img as img', 'em.empresa as empresa')
      ->where('sis.id_fase','=',1)
      ->get();
    return $desarrollo->toJson();
  }
}
