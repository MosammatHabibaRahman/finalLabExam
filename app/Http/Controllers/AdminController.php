<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequests;

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

    public function store(UserRequests $request)
    {
        if($request->add)
        {
            $user = new User();
            $user->username = $request->username;
            $user->password = $request->password;
            $user->name = $request->name;
            $user->company = $request->company;
            $user->contact = $request->contact;
            $user->type = "employer";
            $user->save();

            $validated = $request->validated();
            
            return redirect()->route('admin.view');
        }
        else if($request->cancel)
        {
            return redirect()->route('admin.index');
        }
    }

    public function view()
    {
        $users = DB::table('users')
            ->where('type',"employer")
            ->get();
        return view('admin.view')->with('users', $users);
    }

    public function edit($id)
    {
        return view('admin.edit');
    }

    public function delete($id)
    {
        return view('admin.delete');
    }
}
