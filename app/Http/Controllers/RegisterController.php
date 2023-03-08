<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
//    private $user;
//    public function __construct(User $user)
//        {
//            $this->user = $user;
//        }

//    public function postRegister(Request $request)
//   {
//
////       $rules = [
////           'name' => 'unique:users|required',
////           'email'    => 'unique:users|required',
////           'password' => 'required',
////       ];
////       $input     = $request->only('name', 'email','password');
////       $validator = Validator::make($input, $rules);
////
////       if ($validator->fails()) {
////
//////           return redirect()->route('register');
////           return response()->json(['success' => false, 'error' => $validator->messages()]);
////       }
////       $name = $request->name;
////       $email    = $request->email;
////       $password = $request->password;
////       $user     = User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password)]);
//
//
//       return redirect()->route('login');
//   }
//
//   public function register()
//   {
//
//       return view('auth/register');
//   }






        public function create()
        {
            return view('register.create');
        }

        public function store()
        {
            $this->validate(request(),[
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ]);

            $user = User::create(request(['name', 'email', 'password']));

            auth()->login($user);
            return redirect()->to('/welcome');

        }




}
