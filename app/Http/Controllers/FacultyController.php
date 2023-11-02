<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculty=Faculty::get();
        return view('faculty_view',compact('faculty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty_add');
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
            'profile'=>'required',
            'course'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'education'=>'required'
        ]);

        $name=$request->get('name');
        $course=$request->get('course');
        $contact=$request->get('contact');
        $email=$request->get('email');
        $education=$request->get('education');
        $profile=$request->file('profile');
        $getfile=$profile->getClientOriginalName();
        $profile->move('image',$getfile);

        $faculty=new Faculty([
            'name'=>$name,
            'profile'=>$getfile,
            'course'=>$course,
            'contact'=>$contact,
            'email'=>$email,
            'education'=>$education
        ]);

        $faculty->save();
        return redirect('/faculty');
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
        $faculty=Faculty::find($id);
        return view('faculty_edit',compact('faculty'));
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
            'course'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'education'=>'required'
        ]);

        $name=$request->get('name');
        $course=$request->get('course');
        $contact=$request->get('contact');
        $email=$request->get('email');
        $education=$request->get('education');
        $profile=$request->file('profile');


        if(!empty($profile)){
            $getfile=$profile->getClientOriginalName();
        $profile->move('image',$getfile);

        $faculty=Faculty::find($id);
        $faculty->name=$name;
        $faculty->profile=$getfile;
        $faculty->course=$course;
        $faculty->contact=$contact;
        $faculty->email=$email;
        $faculty->education=$education;
        $faculty->update();
        return redirect('/faculty');
        }

        else{
            $faculty=Faculty::find($id);
            $faculty->name=$name;
            $faculty->course=$course;
            $faculty->contact=$contact;
            $faculty->email=$email;
            $faculty->education=$education;
            $faculty->update();
            return redirect('/faculty');
        }

        }
        

        

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $faculty=Faculty::find($id);
       $faculty->delete();  
       return redirect('/faculty');
    }
    public function editcode($id)
    {
        echo "test";
    }
}
