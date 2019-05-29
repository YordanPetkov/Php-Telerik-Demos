<?php

namespace CoolBlog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as IlluminateRequest;

class HomeController extends Controller
{
    
    public function index($id) {
        /* var_dump(IlluminateRequest::get('sort'));
        return '#'.$id.' Hello from controller.'; */

        return view('public.demo');
    }
}
