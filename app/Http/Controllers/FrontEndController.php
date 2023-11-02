<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //

    public function frontindex(){
        $linkvar="style";
        return view('front.index',compact('linkvar'));
    }

    public function about(){
        $linkvar="about";
        return view('front.about',compact('linkvar'));
    }

    public function faculty(){
        $linkvar="faculty";
        return view('front.faculty',compact('linkvar'));
    }

    public function courses(){
        $linkvar="courses";
        return view('front.courses',compact('linkvar'));
    }

    public function gallery(){
        $linkvar="gallery";
        return view('front.gallery',compact('linkvar'));
    }

    public function contact(){
        $linkvar="contact";
        return view('front.contact',compact('linkvar'));
    }

    public function register(){
        $linkvar="registration-page";
        return view('front.registration-page',compact('linkvar'));
    }


}
