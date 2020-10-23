<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class reservationController extends Controller
{
    public function view()
    {
        return view('reservation');
    }

    public function edit($id)
    {
//        $information = auth()->user()->find($id);
        $information =  User::find($id);
        return view('reservation', compact('information'));

    }

    public function update(Request $request, $id)
    {

//        return dd($request);
        $information = User::find($id);

        if ($request->hasFile("lawyerimage")) {
            $file = $request->file('lawyerimage')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $extention = $request->file('lawyerimage')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extention;
            $request->file('lawyerimage')->storeAs('public/images', $filenametostore);

        } else {
            return $request->image;
        }

        $information->name = $request->input('lawyername');
        $information->email = $request->input('lawyeremail');
        $information->birth_date = $request->input('lawyerbirthday');
        $information->user_mobile = $request->input('mobile');
        $information->user_card_id = $request->input('idcard');
        $information->governorate = $request->input('governorate');
        $information->work_sector = $request->input('work_sector');
        $information->password = Hash::make($request->input('newpass'));

        $information->user_image = $filenametostore;

        $information->save();
        return view('welcome');
    }


}
