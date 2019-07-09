<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];
        
        $status = 401;
        $response = ['error' => 'Unauthorised'];
        
        if (Auth::attempt($credentials)) {
            $status = 200;
            $response = [
                'token' => Auth::user()->createToken('umkmku')->accessToken,
                'user' => Auth::user()
            ];
        }
        
        return response()->json($response, $status);
        
    }
    public function register(Request $request)
    {
        $request->validate([
            
            'email' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        $user = new User([
            'email' => $request->email,
            'password' => bcrypt($request->password),             
        ]);
        $user->save();
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
       
    }
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
