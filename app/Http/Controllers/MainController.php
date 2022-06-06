<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classTeacher;
use App\Models\User;

class MainController extends Controller
{
    public function returnclass($id)
    {
        $cs = classTeacher::find($id);

        $teacher = User::find($cs['teacherId']);

        $cs['tname'] = $teacher['name'];
        $cs['tphone'] = $teacher['phoneNumber'];
        $cs['temail'] = $teacher['email'];

        return view('classS', ['class' => $cs]);
    }
}
