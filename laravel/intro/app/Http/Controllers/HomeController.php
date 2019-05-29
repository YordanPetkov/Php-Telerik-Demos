<?php

namespace CoolBlog\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index($id) {
        return '#'.$id.' Hello from controller.';
    }
}
