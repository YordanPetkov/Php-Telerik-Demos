<?php

namespace CoolBlog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as IlluminateRequest;

class HomeController extends Controller
{
    
    public function index($name) {
        /* var_dump(IlluminateRequest::get('sort'));
        return '#'.$id.' Hello from controller.'; */

        return view('public.demo', ['name' => $name,
                                'numbers' => [1,2,3,4],
                                'users' => []
                ]);
    }
}
