<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LectuereController extends Controller
{

    public function index($id)
    {
        $course = Course::findOrFail($id);
        $lectures =Lecture::where('course_id',$id)->paginate(10);
        // $courses =Course::select('id','title')->get();
        return view('admin.lectures.index',compact(['lectures', 'course']));
    }


    public function create(int $id)
    {
        $course = Course::findOrFail($id);
        return view('admin.lectures.create',compact('course'));
    }


    public function store(Request $request, int $id)
    {
        // dd($request->all());
        $request->validate([
            'title'=>'required|string|min:3|max:255',
            'description'=>'required|string|min:3',

            'link'=>'required',
            'image'=>'required|image'
        ]);
        Lecture::create([
            'title' =>$request->input('title'),
            'description' =>$request->input('description'),
            'course_id' =>$id,
            'link' =>$request->input('link'),
            'image'=>$request->file('image')->store('lectures')
        ]);
        return redirect()->route('admin.lectures.index', $id)->with('success','Lecture saved successfully');
    }


    public function show($id)
    {
        $lecture =Lecture::findOrFail($id) ;
        return view('admin.lectures.show',compact('lecture'));
    }


    public function edit($id)
    {
        // $courses =Course::select('id','title')->get();
        $lecture =Lecture::findOrFail($id) ;
        return view('admin.lectures.edit',compact(['lecture']));
    }


    public function update(Request $request, $id)
    {
        $lecture =Lecture::findOrFail($id) ;
        $lecture->title =$request->input('title');
        $lecture->description =$request->input('description');
        $lecture->link =$request->input('link');
        // $lecture->course_id =$request->input('course_id');
        if($request->has('image')){
            File::delete('uploaded/'.$lecture->image);
            $lecture->image =$request->file('image')->store('lectures');
        }
        $lecture->save();
        return redirect()->route('admin.lectures.index', $lecture->course_id)->with('success','Lecture Updated successfully');

    }

    public function destroy($id)
    {
        $lecture =Lecture::findOrFail($id) ;
        $course_id = $lecture->id;
        File::delete('uploaded/'.$lecture->image);
        $lecture->delete();
        return redirect()->route('admin.lectures.index', $course_id)->with('success','Lecture deleted successfully');

    }
}
