<?php

namespace CoolBlog\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index() {
        return 'Hello from controller.';
    }
}
