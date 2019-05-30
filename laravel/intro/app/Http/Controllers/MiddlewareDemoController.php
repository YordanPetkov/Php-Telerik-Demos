<?php

namespace CoolBlog\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareDemoController extends Controller
{
    public function index () {
        return view('MiddlewareDemoView');
    }
}
