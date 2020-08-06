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

  public function opciones(){
    $opt = $this->db_gcc->table('opciones')
      ->select('id_opcion','opcion','url')
      ->get();
    return $opt->toJson();
  }
}
