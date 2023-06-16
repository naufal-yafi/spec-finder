<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfEmptySearch
{
  public function handle(Request $request, Closure $next)
  {
    $parametersToCheck = ['search', 'category', 'brand', 'author'];

    if (empty($request->query())) {
      return redirect('/');
    } else {
      foreach ($parametersToCheck as $parameter) {
        if ($request->has($parameter) && $request->input($parameter) === null) {
          return redirect('/');
        }
      }
    }

    return $next($request);
  }
}
