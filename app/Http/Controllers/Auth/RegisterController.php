<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Type;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
            'image' => ['nullable', 'image'],
            'vat' => ['required', 'numeric', 'digits:11', 'unique:users'],
            'address' => ['required', 'string', 'max:300'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'types' => ['required']
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
        $newUser = new User();

        $newUser -> name = $data['name'];
        if(isset($data['image'])){
            $newUser->image = Storage::put('uploads', $data['image']);
        }
        $newUser -> vat = $data['vat'];
        $newUser -> address = $data['address'];
        $newUser -> email = $data['email'];
        $newUser -> password = Hash::make($data['password']);

        $newUser->save();

        if(isset($data['types'])) {
            $newUser->types()->sync($data['types']);
        }

        // $user =  User::create([
        //     'name' => $data['name'],
        //     'image' => Storage::put('uploads', $data['image']),
        //     'vat' => $data['vat'],
        //     'address' => $data['address'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);

        return $newUser;

    }

    public function showRegistrationForm()
    {
        $types = Type::all();
        return view('auth.register', compact('types'));
    }
}
