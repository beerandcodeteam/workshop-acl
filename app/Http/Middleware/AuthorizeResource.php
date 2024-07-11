<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeResource
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routeName = $request->route()->getName();
        $name = Str::before($routeName, '.');
        $method = Str::after($routeName, '.');

        $resource = [
            'index' => 'view-any-' . $name,
            'create' => 'create-' . $name,
            'store' => 'create-' . $name,
            'edit' => 'view-' . $name,
            'show' => 'view-' . $name,
            'update' => 'update-' . $name,
            'destroy' => 'delete-' . $name,
        ];

        $rule = $resource[$method];

        Gate::authorize($rule);

        return $next($request);
    }
}
