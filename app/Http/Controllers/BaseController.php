<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
  /**
   * Metodo responsavel por retornar os todds os usuarios
   *
   * @return void
   */
  public function show()
  {
    return $this->class::all();
  }
  
  /**
   * Metodo responsavel por registrar um usuario
   *
   * @return void
   */
  public function store(Request $request)
  {
    return response()->json(
      $this->class::create($request->all()), 201
    );
  }

  /**
   * Metodo responsavel por retornar os dados de um usuario especifico
   *
   * @return void
   */
  public function search(int $id)
  {
    $response = response()->json('', 204);
    if($this->class::find($id)){
      $response = response()->json($this->class::find($id), 200);
    } 
    return $response;
  }
  
  /**
   * Metodo responsavel por atualizar os dados de um usuario especifico
   *
   * @return void
   */
  public function update(int $id, Request $request)
  {
    $response = response()->json(["erro" => "Parece que o usuario não está cadastrado"], 404);
    if($this->class::find($id)){
      $response = response()->json($this->class::find($id)->fill($request->all())->save(), 200);
    } 
    return $response;
  }

   
  /**
   * Metodo responsavel por deletar os dados de um usuario especifico
   *
   * @return void
   */
  public function destroy(int $id)
  {
    $response = response()->json(["erro" => "Parece que o usuario não está cadastrado"], 404);
    if($this->class::find($id)){
      $response = response()->json($this->class::find($id)->destroy(), 200);
    } 
    return $response;
  }
}
