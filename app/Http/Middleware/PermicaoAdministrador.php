<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class PermicaoAdministrador
{
  protected $auth;

  public function __construct(Auth $auth)
  {
     $this->auth = $auth;
  }

  public function handle($request, Closure $next)
  {
    // Auth::user()->type;
    if(Auth::check()){
      if(Auth::user()->acesso == 3){
        return $next($request);
      }
    }
    return redirect('/home');
  }
}
