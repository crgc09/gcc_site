<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SistemasController extends Controller
{
  protected $db_gcc;
  //
  public function __construct()
  {
    $this->middleware('auth');
    $this->db_gcc = DB::connection('gcc');
  }
  //
  public function index(){
    //
  }
  //
  public function create(){
    //
  }
  //
  public function store(Request $request){
    //
  }
  //
  public function show($id){
    $sistema = $this->db_gcc->table('sistemas')
      ->where('id_sistema','=',$id)
      ->get();
    return $sistema->toJson();
  }
  //
  public function edit($id)
  {
      //
  }
  //
  public function update(Request $request, $id)
  {
      //
  }//
  public function destroy($id)
  {
      //
  }
}
