<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class PermicaoAluno
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
      if(Auth::user()->acesso >= 0){
        return $next($request);
      }
    }
    return redirect('/home');
  }
}
