<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class lawyerProfileController extends Controller
{
//    public function view()
//    {
//        return view('lawyer_profile');
//    }

    public function edit($id)
    {
        $information = User::find($id);
//        dd($information);
        return view('lawyer_profile', compact('information'));
    }
}
