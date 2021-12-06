<?php

namespace App\Http\Controllers;

use App\Models\SystemUser;

class SystemUserController extends BaseController
{
  /**
   * Metodo responsavel por retornar os todds os usuarios
   *
   * @return void
   */
  public function __construct()
  {
      $this->class = SystemUser::class;
  }
}
