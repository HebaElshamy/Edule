<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return  \Illuminate\Contracts\View\Factory|Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
        // dd("you are in index");
        $subjects =Subject::paginate(10);
        return view('admin.subjects.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Contracts\View\Factory|Illuminate\Contracts\View\View
     */
    public function create()
    {
        //
        return view('admin.subjects.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name'=>'required|string|min:3|max:255',
            'image'=>'required|image'
        ]);
        // dd($request->all());
        Subject::create([
            'name' =>$request->input('name'),
            'image'=>$request->file('image')->store('subjects')
        ]);
        return redirect()->route('admin.subjects.index')->with('success','Subject saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return  \Illuminate\Contracts\View\Factory|Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        //
        $subject =Subject::findOrFail($id) ;
        return view('admin.subjects.edit',compact('subject'));

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
        // dd($request->all());
        $subject =Subject::findOrFail($id) ;
        $request->validate([
            'name'=>'required|string|min:3|max:255',
            'image'=>'nullable|image'
        ]);
        $subject->name =$request->input('name');
        if($request->has('image')){
            File::delete('uploaded/'.$subject->image);
            $subject->image =$request->file('image')->store('subjects');
        }
        $subject->save();
        return redirect()->route('admin.subjects.index')->with('success','Subject updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject =Subject::findOrFail($id) ;
        File::delete('uploaded/'.$subject->image);
        $subject->delete();
        return redirect()->route('admin.subjects.index')->with('success','Subject deleted successfully');




    }
}
