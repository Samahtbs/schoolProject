<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use function PHPSTORM_META\type;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Models\studentclass;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    //*********************************************

    public function registration()
    {
        return view('auth.registration');
    }

    //*********************************************

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');

        if (auth::attempt(['email' => $email, 'password' => $password])) {
            $user = auth()->user();
            $user->token = Str::random(60);
            //$user->save();
            if ($user->type == 1) {
                //teacher
                return redirect()->intended('teacher')
                    ->with('You have Successfully loggedin');
            } else if ($user->type == 2) {
                //student

                return studentclass::all(); //redirect()->intended('student')->withSuccess('You have Successfully loggedin');
            } else {
                //admin
                return redirect()->intended('dashboard')
                    ->withSuccess('You have Successfully loggedin');
            }
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    //*********************************************



    //*********************************************



    //*********************************************

    public function postRegistration(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:191',
                'email' => 'required|unique:users',
                'password' => 'required|min:6',
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

            return redirect("teacher")->withSuccess('Great! You have Successfully loggedin');

            /*
            if ($request->type == 1) {
                //teacher
                return redirect("teacher")->withSuccess('Great! You have Successfully loggedin');
            } else if ($request->type == 2) {
                //student
                return redirect("student")->withSuccess('Great! You have Successfully loggedin');
            }
            */
        }
    }

    //*********************************************

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    //*********************************************

    public function student()
    {
        if (Auth::check()) {
            return view('student');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    //*********************************************

    public function teacher()
    {
        if (Auth::check()) {
            return view('teacher');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    //*********************************************

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    //*********************************************

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
