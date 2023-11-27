<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckFormStep
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    //     protected function redirectTo(Request $request): ?string
    //     {
    //         dd(Auth::user()->form_step);
    //         if (Auth::user()->form_step == 0) {
    //             return route('dashboard');
    //         } elseif (Auth::user()->form_step == 2) {
    //             return route('form.step2');
    //         } elseif (Auth::user()->form_step == 3) {
    //             return route('form.step3');
    //         } else {
    //             return route('form.step4');
    //         }
    //     }
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $user = Auth::user();
        return $next($request);
    }



}
