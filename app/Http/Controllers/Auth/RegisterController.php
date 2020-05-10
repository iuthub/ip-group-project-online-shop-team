<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use \App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'regex:/^(?=.*?[a-zA-Z0-9])(?=.*?[#?!@$%^&*-]).{5,}$/', 'string', 'min:5', 'confirmed'],
            'phonenumber'=>['required','regex:/^[+]{1}[9]{2}[8]{1}[-][9]{1}[0-9]{1}[-][0-9]{7}$/u'],
            'birthdate'=>['required','regex: /^(0[1-9]|[12][0-9]|3[01])[-]{1}(0[1-9]|1[012])[-]{1}(19\d{2}|20[0-1]{1}[0-9]{1})$$/u'],
            'postalcode'=>['required','regex:/^[0-9]{6}$/u'],
            'city'=>['required','regex:/^[a-zA-Z]{2,}$/u'],
            'passport'=>['required','regex:/^[A]{1}(A|B){1}[0-9]{7}$/u'],
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
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
