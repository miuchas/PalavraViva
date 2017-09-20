<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    return view('home.home');
  }

  public function logout(Request $request)
  {
    Auth::logout();
    return redirect()->action('HomeController@index');
  }
}
