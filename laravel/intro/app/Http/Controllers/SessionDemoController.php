<?php

namespace CoolBlog\Http\Controllers;

use Illuminate\Http\Request;

class SessionDemoController extends Controller
{
    public function index () {
        $cnt = session('cnt', 0);
        $cnt++;
        session(['cnt' => $cnt]);
        return $cnt;
    }
}
