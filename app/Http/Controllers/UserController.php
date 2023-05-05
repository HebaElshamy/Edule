<?php

namespace App\Http\Controllers;

use App\Models\UserCourse;
use App\Models\Course;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role' ,'=','user')->select('id','name')->paginate(12);
        // dd($count_user);
        return view('admin.users.all-user',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $courses=Course::select('id','title')
                        ->whereNotIn('id',function($query)use($id){
                            $query->select('course_id')
                            ->from('user_courses')
                            ->where('user_id','=',$id);
                            })
                        ->orderBy('title','ASC')
                        ->get();
        $user = User::select('id','name')->where('id' ,'=',$id)->first();
        return view('admin.users.create',compact('courses','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        // dd($request->all());
        $request->validate([
            'course_id' =>[
                'required','integer',
                Rule::exists('courses','id'),
            ]
        ]);
        UserCourse::create([
            'course_id' =>$request->input('course_id'),
            'user_id' =>$id,
            'lectures_ids'=>0,
            'progress'=>0

        ]);
        return redirect()->route('admin.user.show',$id)->with('success','Course saved successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = UserCourse::select('id','course_id','progress')->where('user_id' ,'=',$id)->paginate(12);
        $user = User::select('id','name')->where('id' ,'=',$id)->first();


        return view('admin.users.view',compact('courses','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =User::findOrFail($id) ;
        $user->delete();
        return redirect()->route('admin.all.users')->with('success','Student deleted successfully');

    }
    public function destroyCourse($id)
    {
        $userCourse =UserCourse::findOrFail($id) ;
        $user_id=$userCourse->user_id;
        $userCourse->delete();
        return redirect()->route('admin.user.show',$user_id)->with('success','Course deleted successfully');

    }
}
