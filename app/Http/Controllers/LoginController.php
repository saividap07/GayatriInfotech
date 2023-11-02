<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function indexpage()
    {
        return view('index');
    }
    public function Login()
    {
        return view('signin');
    }
    public function logincheck(Request $request)
    {
        $username=$request->get('username');
        $pass=$request->get('password');
        if($username=="admin" && $pass=="admin")
        {
            echo "<script>alert('Login Success')
            window.location.href='/index'</script>"; 
            //return redirect('/index');
        }
        else
        {
            echo "<script>alert('Login Fail')
            window.location.href='/admin'</script>"; 
        }
    }
}
