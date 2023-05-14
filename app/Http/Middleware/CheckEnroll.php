<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckEnroll
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $courseId =$request->route('id');
        // dd($courseId);
        if (Auth::check())
        {
            foreach (Auth::user()->userCourses as $usercourse )
            {
                if ($usercourse->course_id ==$courseId)
                {
                    // dd('hh');
                    return $next($request);
                }
                // else
                // {
                //     return redirect()->route('user.welcome.singleCourse',$courseId);
                // }


            }

        }
         else
        {
            return redirect()->route('user.welcome.singleCourse',$courseId);
        }












    }
}
