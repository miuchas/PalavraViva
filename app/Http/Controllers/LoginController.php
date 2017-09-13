<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      return view('home');
    }

    public function logout(Request $request)
    {
      Auth::logout();
      return redirect('/login');
    }
}
