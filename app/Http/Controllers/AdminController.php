<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function add()
    {
        return view('admin.add');
    }

    public function view()
    {
        return view('admin.view');
    }
}
