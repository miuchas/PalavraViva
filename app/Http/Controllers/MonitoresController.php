<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoresController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
}
