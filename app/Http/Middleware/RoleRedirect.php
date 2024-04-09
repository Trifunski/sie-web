<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
    
        if ($user) {
            // Define allowed routes for each role
            $allowedRoutes = [
                'admin' => ['*'], // The admin can access all routes
                'webSectionManager' => ['/webSectionManager/*'], // The manager only to their section
                'blogContentEditor' => ['/blogContentEditor/*'], // The editor only to their section
            ];
    
            $userRole = $user->role;
            $currentPath = '/' . $request->path();
    
            if (isset($allowedRoutes[$userRole])) {
                $isAllowed = false;
                foreach ($allowedRoutes[$userRole] as $routePattern) {
                    // Use wildcards for dynamic routes
                    $pattern = str_replace('*', '.*', $routePattern);
                    if (preg_match('#^' . $pattern . '$#', $currentPath)) {
                        $isAllowed = true;
                        break;
                    }
                }
    
                if (!$isAllowed) {
                    // Redirect to the dashboard or show error message
                    return redirect('/');
                }
            } else {
                // Redirect to the dashboard or show error message if the role has no configured routes
                return redirect('/');
            }
        }
    
        return $next($request);
    }

}
