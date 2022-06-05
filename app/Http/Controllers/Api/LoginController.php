<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {

            $user = auth()->user();
            $user->token = Str::random(60);
            //$user->save();
            return $user;
        }
        return "login error";
    }

    public function logout()
    {

        if (auth()->user()) {
            $user = auth()->user();
            $user->token = null;
            //$user->save();
            //return response()->json(['valid' => auth()->check()]); 
            return response()->json(['message' => 'Thank you for using our application.']);
        }
        return response()->json([
            'error' => 'Unable to logout user',
            'code' => 401,
        ], 401);
    }
}
