<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classTeacher;
use App\Models\User;

class MainController extends Controller
{
    public function returnclass($id)
    {
        $class = classTeacher::find($id);

        $teacher = User::find($class['teacherId']);

        $class['tname'] = $teacher['name'];
        $class['tphone'] = $teacher['phoneNumber'];
        $class['temail'] = $teacher['email'];

        return view('classS', ['class' => $class]);
    }

    public function returnteacher($id)
    {
        $teacher = User::find($id);
        return view('teaher', ['tech' => $teacher]);
    }
}
