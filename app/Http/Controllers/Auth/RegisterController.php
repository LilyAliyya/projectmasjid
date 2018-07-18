<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/home';

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [ 
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'namapemohon' => 'required|string|max:255',
            'nomboric' => 'required|string|max:255|unique:users',
            'curraddress' => 'required|string|max:255',
            'homenumber' => 'required|string|max:255',
            'mobilenumber' => 'required|string|max:255',
            'maritalstatus' => 'required|string|in:single,married',
            'occupation' => 'required|string|max:255',
            'salary' => 'required|max:255',
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'namapemohon' => $data['namapemohon'],
            'nomboric' => $data['nomboric'],
            'curraddress' => $data['curraddress'],
            'homenumber' => $data['homenumber'],
            'mobilenumber' => $data['mobilenumber'],
            'maritalstatus' => $data['maritalstatus'],
            'occupation' => $data['occupation'],
            'salary' => $data['salary'],
        ]);

    }

    /*
    public function showregistrationform()
    {
        $salary = User::pluck('salary', 'id');
        return view('auth.register', [ 'salary' => $salary]);
    }
    */
}
