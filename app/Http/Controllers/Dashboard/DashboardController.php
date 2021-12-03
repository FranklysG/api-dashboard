<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;

class DashboardController extends Controller
{
  /**
   * Metodo responsavel por retornar os dados da Dashboard
   *
   * @return void
   */
  public function index()
  {
    return Dashboard::all();
  }
}
