<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class CourseController extends Controller
{

    public function index()
    {
        $courses =Course::paginate(10);
        $subjects =Subject::select('id','name')->get();
        return view('admin.courses.index',compact(['courses','subjects']));

    }


    public function create()
    {
        $subjects =Subject::select('id','name')->get();
        return view('admin.courses.create',compact('subjects'));
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required|string|min:3|max:255',
            'description'=>'required|string|min:3',
            'subject_id'=>'required',
            'price'=>'required',
            'discount_type'=>'required',
            'discoun_value'=>'required',
            'max_discount'=>'required',
            'image'=>'required|image'
        ]);

            Course::create([
            'title' =>$request->input('title'),
            'description' =>$request->input('description'),
            'price' =>$request->input('price'),
            'subject_id' =>$request->input('subject_id'),
            'discount_type' =>$request->input('discount_type'),
            'discoun_value' =>$request->input('discoun_value'),
            'max_discount' =>$request->input('max_discount'),
            'image'=>$request->file('image')->store('courses')
        ]);
        return redirect()->route('admin.courses.index')->with('success','Course saved successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
        $subjects =Subject::select('id','name')->get();
        $course =Course::findOrFail($id) ;
        return view('admin.courses.edit',compact(['subjects','course']));
    }


    public function update(Request $request, $id)
    {
        //
        // dd($request->all());
        $course =Course::findOrFail($id) ;
        $request->validate([
            'title'=>'required|string|min:3|max:255',
            'description'=>'required|string|min:3',
            'subject_id'=>'required',
            'price'=>'required',
            'discount_type'=>'required',
            'discoun_value'=>'required',
            'max_discount'=>'required',
            'image'=>'nullable|image'
        ]);

        $course->title =$request->input('title');
        $course->description =$request->input('description');
        $course->price =$request->input('price');
        $course->subject_id =$request->input('subject_id');
        $course->discount_type =$request->input('discount_type');
        $course->discoun_value =$request->input('discoun_value');
        $course->max_discount =$request->input('max_discount');
        if($request->has('image')){
            File::delete('uploaded/'.$course->image);
            $course->image =$request->file('image')->store('courses');
        }
        $course->save();
        return redirect()->route('admin.courses.index')->with('success','Course Updated successfully');

    }


    public function destroy($id)
    {
        $course =Course::findOrFail($id) ;
        File::delete('uploaded/'.$course->image);
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success','Course deleted successfully');

    }
}
