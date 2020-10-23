<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class userRegisterTow extends Controller
{
    public function view()
    {
        return view('userRegister');
    }

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_image' => ['required','mimes:jpg'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'birth_date' => ['required', 'string', 'max:255'],
            'user_gender' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'user_image' => $data['user_image'],
            'name' => $data['name'],
            'email' => $data['email'],
            'birth_date' => $data['birth_date'],
            'user_gender' => $data['user_gender'],
            'password' => Hash::make($data['password']),
            'user_card_id' => $data['user_card_id'],
            'user_mobile' => $data['user_mobile'],
            'user_phone' => $data['user_phone'],
            'country' => $data['country'],
            'governorate' => $data['governorate'],
            'work_sector' => $data['work_sector'],
            'graduate_year' => $data['graduate_year'],
            'experience_years' => $data['experience_years'],
            'information' => $data['information'],
            'user_card_image' => $data['user_card_image'],
            'user_type' => $data['user_type'],
        ]);
    }
}
