<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Summary of WelcomeController
 */
class WelcomeController extends Controller{

    function getCourses(int $items){
       $usedId = [];
       $courses = [];
       //get random courses , each course has different subject
       for($i =0 ; $i<$items ; $i++)
       {
        $course =Course::whereNotIn('subject_id',$usedId)
                        ->inRandomOrder()
                        ->first();
        array_push($usedId,$course->subject_id);
        array_push($courses ,$course);
        if(count($courses)==6)
        {
            break;
        }

       }
        return $courses;
    }

    public function index() {
        //get subject has courses
        $subjects=DB::table('courses')
        ->join('subjects','courses.subject_id','=','subjects.id')
        ->select('subjects.id','subjects.name')
        ->distinct()
        ->get();
        // // get random courses
        $courses = $this->getCourses($subjects->count());

        $subject_courses = Subject::all();
        // dd($subjects);
        // $subjects = Subject::get();



        return view('website.index', compact('subjects','courses','subject_courses'));
        // return view('website.test', compact('subjects','courses'));

    }

    public function allCourses()
    {
        $courses =Course::latest()->paginate(12);
        return view('website.courses',compact('courses'));
    }
    public function singleCourse($id)
    {
        $course=Course::findOrfail($id);

        return view('website.courses-details',compact('course'));
    }
    public function enroll($id)
    {


        return view('website.after-enroll');
    }
    public function loginForm()
    {


        return view('website.login');
    }
    public function registerForm()
    {


        return view('website.register');
    }
    public function profile($id)
    {


        return view('website.user.public-profile');
    }
    /**
     * Summary of search
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function search(Request $request)
    {
        $search =$request->input('search');
        $courses =Course::where('title','like','%'.$search.'%')->latest()->paginate(12);
        //  return redirect()->route('user.welcome.courses',compact('courses')); // how it working
        return view('website.courses',compact('courses'));
    }
}
