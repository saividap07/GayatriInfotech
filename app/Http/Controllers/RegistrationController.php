<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name'=>'required|regex:/^[a-zA-Z ]*$/',
        //     'number'=>'required|digits:10',
        //     'email'=>'required|email',
        //     'profile'=>'required|max:100',
        //     'grad'=>'required',
        //     'year'=>'required',
        //     'gender'=>'required',
        //  ]);

         $name=$request->get('name');
         $number=$request->get('number');
         $email=$request->get('email');
         $profile=$request->file('profile');
         $orgProfile=$profile->getClientOriginalName();
         $profile->move('profile/',$orgProfile);
         $degree=$request->get('degree');
         $year=$request->get('year');
         $gender=$request->get('gender');
         

         $data=new Registration([
            'name'=>$name,
            'mobile_no'=>$number,
            'email'=>$email,
            'profile'=>$orgProfile,
            'degree'=>$degree,
            'grad_year'=>$year,
            'gender'=>$gender
         ]);

         $data->save();
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
        //
    }
}
