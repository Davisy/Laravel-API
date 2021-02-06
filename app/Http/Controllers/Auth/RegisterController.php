<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number'=>'required|unique:users',
            'role'=>'required',
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
     $user = $this->createUser($data);
     switch($data['role']){
        case 1:
        $this->createDisposer($user, $data);
        $this->redirectTo = '/disposer-profile';
        break;
        case 2:
        $this->createCollector($user, $data);
        $this->redirectTo = '/collector-profile';
        break;
    }
    return $user;
}

private function createUser(array $data ){

    $user = new User;
    $user->name = $data['name'];
    $user->email = $data['email'];
    $user->phone_number =  $data['phone_number'];
    $user->role =  $data['role'];
    $user->password = Hash::make($data['password']);
    $user->save();

    return $user;

}

private function createCollector(User $user, array $data){
    return $user->collector()->create([
        'company_name' => $data['company_name'],
        'business_type' => $data['business_type'],
        'address' => $data['address']
    ]);
}

private function createDisposer(User $user, array $data){
    return $user->disposer()->create([
        'address' => $data['address']
    ]);
}

}
