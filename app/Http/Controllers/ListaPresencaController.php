<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaPresencaController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
}
