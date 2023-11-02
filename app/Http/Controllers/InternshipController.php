<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internship=Internship::get();
        return view('internship_view',compact('internship'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('internship_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'start'=>'required',
            'end'=>'required'
        ]);

        $name=$request->get('name');
        $start=$request->get('start');
        $end=$request->get('end');

        $internship=new Internship([
            'course'=>$name,
            'start_date'=>$start,
            'end_date'=>$end
        ]);

        $internship->save();
        return redirect('/internship');
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $internship=Internship::find($id);
        return view('internship_edit',compact('internship'));
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
        $request->validate([
            'name'=>'required',
            'start'=>'required',
            'end'=>'required'
        ]);

        $course=$request->get('name');
        $start=$request->get('start');
        $end=$request->get('end');

        $internship=Internship::find($id);
        $internship->course=$course;
        $internship->start_date=$start;
        $internship->end_date=$end;

        $internship->update();
        return redirect('/internship');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $internship=Internship::find($id);
        $internship->delete();
        return redirect('/internship');
    }
}
