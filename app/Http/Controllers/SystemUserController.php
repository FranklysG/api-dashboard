<?php

namespace App\Http\Controllers;

use App\Models\SystemUser;

class SystemUserController extends Controller
{
  /**
   * Metodo responsavel por retornar os dados da Sales
   *
   * @return void
   */
  public function index()
  {
    return SystemUser::all();
  }
}
