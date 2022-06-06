<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classTeacher;
use App\Models\User;
use App\Models\file;

class MainController extends Controller
{
    public function returnclass($id)
    {
        $class = classTeacher::find($id);

        $teacher = User::find($class['teacherId']);
        $file = file::where('classid', $id)->get();
        //return $file[0];


        $class['tname'] = $teacher['name'];
        $class['tphone'] = $teacher['phoneNumber'];
        $class['temail'] = $teacher['email'];
        /*
        $class['fname'] = $file[0]['FileName'];
        $class['file'] = $file[0]['FileDecoded'];
        $class['ftime'] = $file[0]['created_at'];
        */

        return view('classS', ['class' => $class, 'file' => $file]);
    }

    public function returnteacher($id)
    {
        $teacher = User::find($id);
        return view('teacherProfile', ['tech' => $teacher]);
    }
}
