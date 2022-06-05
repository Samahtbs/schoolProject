<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request) //Request $request
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:191',
                'email' => 'required|unique:users',
                'password' => 'required',
                'phoneNumber' => 'required|unique:users',
                'type' => 'required',
            ],
            [
                'name.required' => "الإسم مطلوب"
            ]
        );
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $data = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phoneNumber' => $request->phoneNumber,
                'password' => Hash::make($request->password),
                'type' => $request->type,
                'token' => Str::random(60)
            ]);
            return $data;
        }
    }
}
