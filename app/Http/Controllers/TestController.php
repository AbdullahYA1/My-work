<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function view()
    {
        return view('view');
    }

    public function data()
    {
        return view('data');
    }
}