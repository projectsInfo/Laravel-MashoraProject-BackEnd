<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminPageController extends Controller
{
    public function view(){
        $userAdmin = DB::table('userAdministration')->select("*")->get();
        $lawyerAdmin = DB::table('lawyerAdministration')->select("*")->get();

        return view('admin_page')->with(compact('userAdmin', 'lawyerAdmin'));
    }
}
