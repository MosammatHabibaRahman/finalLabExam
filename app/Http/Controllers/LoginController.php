<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(Request $request)
    {
        $data = DB::table('users')
            ->where('username',$request->username)
            ->where('password',$request->password)
            ->get();

        if(count($data)>0)
        {
            $request->session()->put('id',$data[0]->id);
            
            if($data[0]->type == "admin")
            {
                return redirect()->route('admin.index');
            }
            else
            {
                return redirect()->route('employer.index');
            }
        }
        else
        {
            return redirect()->route('login.index');
        }
    }
}
