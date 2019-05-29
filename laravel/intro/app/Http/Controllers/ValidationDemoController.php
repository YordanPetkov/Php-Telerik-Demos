<?php

namespace CoolBlog\Http\Controllers;

use Illuminate\Http\Request;

class ValidationDemoController extends Controller
{
    public function index () {

    }

    public function register_form() {
        return view('public.register');
    }

    public function register(Request $request) {
        
        $this->validate($request,[
            'username' => 'min:5|max:30',
            'email' => 'email',//exists:users,user_email
            'pass' => 'min:10',
            'pass2' => 'same:pass'
        ]);
    }
}
