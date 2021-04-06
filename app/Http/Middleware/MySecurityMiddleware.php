<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Session;
use Closure;

class MySecurityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Step 1: You can use the following to get the route URI $request->path()
        $path = $request->path();
        
        // Step 2: Run the business rules that check for all URI's that you do not need to secure
        $secureCheck = true;
        if($request->is('/') ||
            $request->is('home') ||
            $request->is('login') ||
            $request->is('signin') ||
            $request->is('registration') ||
            $request->is('register') ||
            $request->is('resource-list') || 
            $request->is('church-list') || 
            $request->is('org-profile') ||
            Session::get('principal') == true)
        {
            $secureCheck = false;
        }
        
        // Step 3: If entering a secure URI with not security token then do a redirect to the root URI or Login page
        // $enable = true;
        if($secureCheck)
        {
            return redirect('');
        }
        
        // Proceed as noremal to next Middleware in the chain
        return $next($request);
    }
}
