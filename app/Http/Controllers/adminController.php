<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{

    public function indexSuccess(Request $request)
    {
        $consulting = DB::table('consulting')->select("*")->get();
        return view('consulting_admin')->with(compact('consulting'));
    }

    public function indexIgnored(Request $request)
    {
        $consultingIgnored = DB::table('consultingIgnored')->select("*")->get();
        return view('consultingIgnored')->with(compact('consultingIgnored'));
    }


    public function indexWaiting(Request $request)
    {
        $consultingWaiting = DB::table('consultingWaiting')->select("*")->get();
        return view('consultingWaiting')->with(compact('consultingWaiting'));
    }
}
