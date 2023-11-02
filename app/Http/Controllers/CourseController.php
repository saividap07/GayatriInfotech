<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Course;
use DB;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course=DB::table('courses')
                ->where('parent_id','=','0')
                ->get();
        return view('course_view',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course_add');
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
            'duration'=>'required',
            'fees'=>'required',
            'description'=>'required',
            'document'=>'required',
            'image'=>'required'
        ]);
        $name=$request->get('name');
        $duration=$request->get('duration');
        $fees=$request->get('fees');
        $image=$request->file('image');
        $description=$request->get('description');
        $document=$request->file('document');
        $imagetemp=$image->getClientOriginalName();
        $image->move('image',$imagetemp);
        $documentmp=$document->getClientOriginalName();
        $document->move('image',$documentmp);
        $course=new Course([
            'name'=>$name,
            'duration'=>$duration,
            'fees'=>$fees,
            'description'=>$description,
            'course_img'=>$imagetemp,
            'document'=>$documentmp,
            'status'=>'active',
            'parent_id'=>'0',
        ]);
        $course->save();
        return redirect('/course');
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
        $course=Course::find($id);
        return view('course_edit',compact('course'));
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
            'duration'=>'required',
            'fees'=>'required',
            'description'=>'required',
            'document'=>'required',
            'image'=>'required'
        ]);
        $name=$request->get('name');
        $duration=$request->get('duration');
        $fees=$request->get('fees');
        $description=$request->get('description');
        $image=$request->file('image');
        $document=$request->file('document');
        if($document=="" && $image=="")
        {
            $course=Course::find($id);
            $course->name=$name;
            $course->duration=$duration;
            $course->fees=$fees;
            $course->description=$description;
            $course->update();
            return redirect('/course');
        }else if($image==null)
        {
            $document=$request->file('document');
            $documentmp=$document->getClientOriginalName();
            $document->move('image',$documentmp);
            $course=Course::find($id);
            $course->name=$name;
            $course->duration=$duration;
            $course->fees=$fees;
            $course->description=$description;
            $course->document=$documentmp;
            $course->update();
            return redirect('/course');
        }
        else if($document==null)
        {
            $image=$request->file('image');
            $imagetemp=$image->getClientOriginalName();
            $image->move('image',$imagetemp);
            $course=Course::find($id);
            $course->name=$name;
            $course->duration=$duration;
            $course->fees=$fees;
            $course->description=$description;
            $course->course_img=$imagetemp;
            $course->update();
            return redirect('/course');
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
        $course=Course::find($id);
        $course->delete();
        return redirect('/course');
    }

    //sub-courses functions


    public function subcrs_view(){
        
        $sub=DB::table('courses')        
        ->where('parent_id','!=','0')
        ->select('*')
        ->get();
        return view('subcrs_view',compact('sub'));
    }

    public function subcrs_create(){
        
        $main= DB::table('courses')
                ->select('*')
                ->where('parent_id','=','0')
                ->get();

        return view('subcrs_add',compact('main'));        
    }

    public function subcrs_store(Request $request){
       
        $request->validate([
            'main_id'=>'required',
            'name'=>'required',
            'duration'=>'required',
            'fees'=>'required',
            'description'=>'required',
            'document'=>'required',
            'file'=>'required'
        ]);
            $parent_id=$request->get('main_id');
           
            $name=$request->get('name');
            
            $duration=$request->get('duration');
            
            $fees=$request->get('fees');
            $description=$request->get('description');
            $image=$request->file('file');
            $imagetemp=$image->getClientOriginalName();
            $image->move('image',$imagetemp);

            $document=$request->file('document');
            $documentmp=$document->getClientOriginalName();
            $document->move('image',$documentmp);
            // echo $imagetemp;
            // echo $documentmp;
            // exit();
            $course=new Course([   
            'name'=>$name,
            'duration'=>$duration,
            'fees'=>$fees,
            'description'=>$description,
            'course_img'=>$imagetemp,
            'document'=>$documentmp,
            'parent_id'=>$parent_id,
            'status'=>'active'
        ]);
        $course->save();
        return redirect('/subcrs_view');
    }

    public function subcrs_editt($id){
       
        $main= DB::table('courses')
                ->select('*')
                ->where('parent_id','=','0')
                ->get();
        $data=Course::find($id);
        return view('subcrs_edit',compact('data','main'));
    }

    public function subcrs_update(Request $request,$id){
        $request->validate([
            'main_id'=>'required',
            'name'=>'required',
            'duration'=>'required',
            'fees'=>'required',
            'description'=>'required',
           
        ]);
        $parent_id=$request->get('main_id');
        $name=$request->get('name');
        $duration=$request->get('duration');
        $fees=$request->get('fees');
        $description=$request->get('description');
        $image=$request->file('image');
        $document=$request->file('document');
        if($document=="" && $image=="")
        {
            $course=Course::find($id);
            $course->name=$name;
            $course->duration=$duration;
            $course->fees=$fees;
            $course->description=$description;
            $course->parent_id=$parent_id;
            $course->update();
            return redirect('/subcrs_view');
        }else if($image==null)
        {
            $document=$request->file('document');
            $documentmp=$document->getClientOriginalName();
            $document->move('image',$documentmp);
            $course=Course::find($id);
            $course->name=$name;
            $course->duration=$duration;
            $course->parent_id=$parent_id;
            $course->fees=$fees;
            $course->description=$description;
            $course->document=$documentmp;
            $course->update();
            return redirect('/subcrs_view');
        }
        else if($document==null)
        {
            $image=$request->file('image');
            $imagetemp=$image->getClientOriginalName();
            $image->move('image',$imagetemp);
            $course=Course::find($id);
            $course->name=$name;
            $course->duration=$duration;
            $course->fees=$fees;
            $course->description=$description;
            $course->course_img=$imagetemp;
            $course->parent_id=$parent_id;
            $course->update();
            return redirect('/subcrs_view');
        }
    }
   
    public function subcrs_delete($id){
        $data=Course::find($id);
        $data->delete();
        return redirect('/subcrs_view');
    }
}
