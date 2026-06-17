<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentMiddleware
{
    // Yahan $type parameter pass kiya hai, default value 'auth' rakhi hai
    public function handle(Request $request, Closure $next, $type = 'auth'): Response
    {
        // Agar route 'auth' type ka hai (Dashboard ke liye)
        if ($type === 'auth') {
            if (!session()->has('student_data')) {
                return redirect()->route('student.login')->withErrors(['error' => 'Please login to access your dashboard.']);
            }
        } 
        // Agar route 'guest' type ka hai (Login page ke liye)
        elseif ($type === 'guest') {
            if (session()->has('student_data')) {
                return redirect()->route('student.dashboard');
            }
        }

        return $next($request);
    }
}