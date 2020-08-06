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

  public function empresas(){
    return view('home');
  }
}
