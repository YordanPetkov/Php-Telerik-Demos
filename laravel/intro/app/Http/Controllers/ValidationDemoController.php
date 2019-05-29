<?php

namespace CoolBlog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidationDemoController extends Controller
{
    public function index () {

    }

    public function register_form() {
        return view('public.register');
    }

    public function register(Request $request) {
        
        /* $this->validate($request,[
            'username' => 'min:5|max:30',
            'email' => 'email',//exists:users,user_email
            'pass' => 'min:10',
            'pass2' => 'same:pass'
        ], [
            'username.min' => 'Името е прекалено късо',
            'username.max' => 'Името е прекалено дълго',
        ]); */

        $validator = Validator::make(['title' => 'das'], [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }


    }
}
