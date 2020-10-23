<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use http\Client\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

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
//            'user_image' => ['required','mimes:jpg'],
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'birth_date' => ['required', 'string', 'max:255'],
//            'user_gender' => ['required', 'string', 'max:255'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//            'user_card_id' => ['required', 'bigInteger', 'max:255'],
//            'user_mobile' => ['required', 'bigInteger', 'max:255'],
//            'user_phone' => ['required', 'bigInteger', 'max:255'],
//            'country' => ['required', 'string', 'max:255'],
//            'governorate' => ['required', 'string', 'max:255'],
//            'work_sector' => ['required', 'string', 'max:255'],
//            'graduate_year' => ['required', 'integer', 'max:255'],
//            'experience_years' => ['required', 'integer', 'max:255'],
//            'information' => ['required', 'string', 'max:255'],
//            'user_card_image' => ['required', 'mediumText', 'max:255'],
//            'user_type' => ['required', 'integer', 'max:255'],
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
        $user = User::create([
//            'user_image' => $data['user_image'],
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
//            'user_card_image' => $data['user_card_image'],
            'user_type' => $data['user_type'],
        ]);

        if (request()->hasFile("user_image")) {
//            dd(request()->user_image);
            $user_image = request()->file('user_image')->getClientOriginalName();
            $filename = pathinfo($user_image, PATHINFO_FILENAME);
            $extention = request()->file('user_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extention;
            request()->file('user_image')->storeAs('public/images/', $filenametostore);
            $user->update([
                'user_image' => $filenametostore,
//                'user_image' => $user_image,
            ]);
        }
            if (request()->hasFile("user_card_image")) {
                $user_card_image = request()->file('user_card_image')->getClientOriginalName();
                $filename = pathinfo($user_card_image, PATHINFO_FILENAME);
                $extention = request()->file('user_card_image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extention;
                request()->file('user_card_image')->storeAs('public/images/', $filenametostore);
                $user->update([
                    'user_card_image' => $filenametostore,
//                    'user_card_image' => $user_card_image,
                ]);
            }

        return $user;
    }
}
