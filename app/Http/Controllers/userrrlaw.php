<?php

namespace App\Http\Controllers;

use App\User;
use http\Env\Response;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector;

class userrrlaw extends Controller
{
    public function view()
    {
        return view('lawyerRegister');
    }

    public function show(){
        return view('user_search');
    }


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/lawyerRegister';

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
            'user_image' => ['required', 'mimes:jpg'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'birth_date' => ['required', 'string', 'max:255'],
            'user_gender' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_card_id' => ['required', 'bigInteger', 'max:255'],
            'user_mobile' => ['required', 'bigInteger', 'max:255'],
            'user_phone' => ['required', 'bigInteger', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'governorate' => ['required', 'string', 'max:255'],
            'work_sector' => ['required', 'string', 'max:255'],
            'graduate_year' => ['required', 'integer', 'max:255'],
            'experience_years' => ['required', 'integer', 'max:255'],
            'information' => ['required', 'string', 'max:255'],
            'user_card_image' => ['required', 'mediumText', 'max:255'],
            'user_type' => ['required', 'integer', 'max:255'],
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
            'user_type' => $data ['user_type'],
        ]);
    }

    public function lawyerSearch(Request $request)
    {
        $allLawyer = User::where('user_type', '1')->paginate();
//        dd($allLawyer);
//        dd($allLawyer);
//        $allLawyers = "";
        if (request()->ajax()) {

            $data = $request->all();
//            dd($data);
            if ($request->has('gender1')) {
                $data = $data['gender1'];
            } else if ($request->has('gender2')) {
                $data = $data['gender2'];
            } else if ($request == null) {
//               return view('user_search')->with(compact('allLawyer'));
            }
            $allLawyer = User::where('user_gender', $data)->get();
            return json_encode($allLawyer);

        }
        return view('user_search')->with(compact('allLawyer'));
    }

    public function searchLawyer(Request $request)
    {
//        dd($request);
        if ($request->isMethod('post')) {
            $data = $request->all();
            $data = $data['lawyer'];

            $name = $request->all();
            $name = $name['name'];

            $allLawyer = User::where($name, 'like', "%{$data}%")
//                ->orWhere('work_sector', 'like', "%{$name}%")
//                ->orWhere('country', 'like', "%{$name}%")
//                ->orWhere('country', 'like', "%{$name}%")
                ->paginate();
            return view('user_search')->with(compact('allLawyer'));

        }
    }
}






