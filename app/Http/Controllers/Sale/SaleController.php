<?php

namespace App\Http\Controllers;

use App\Models\Sale;

class SaleController extends Controller
{
  /**
   * Metodo responsavel por retornar os dados da Sales
   *
   * @return void
   */
  public function index()
  {
    return Sale::all();
  }
}
