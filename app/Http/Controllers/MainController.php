<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }
    public function rules()
    {
        return view('rules');
    }
    public function help()
    {
        return view('help');
    }
    public function contacts()
    {
        return view('contacts');
    }

    public function select()
    {
//
    }
    public function warning()
    {
        return view('warning');
    }

}
