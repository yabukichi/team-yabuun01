<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index()
    {
        return view('practices.index');
    }

    public function show()
    {
        return view('practices.show');
    }

    public function result()
    {
        return view('practices.result');
    }
}
