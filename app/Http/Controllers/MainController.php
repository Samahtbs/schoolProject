<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classTeacher;
use App\Models\studentclass;
use App\Models\User;
use App\Models\file;

class MainController extends Controller
{
    public function getClass($classid)
    {
        $class = classTeacher::find($classid);
        return $class;
    }

    public function getFiles($classid)
    {
        $files = file::where('classid', $classid)->get();

        /*
        foreach ($files as $file) {

            $file->all()->toJson(); //['decode'] = json_decode($file['FileDecoded']);
        }
        */


        return $files;
    }

    public function getUser($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function getStudents($classid)
    {
        $students = studentclass::where('classid', $classid)->get();
        return $students;
    }

    public function returnclass($classid)
    {
        $class = self::getClass($classid);
        $files = self::getFiles($classid);
        $teacher = self::getUser($class['teacherId']);

        $class['tname'] = $teacher['name'];
        $class['tphone'] = $teacher['phoneNumber'];
        $class['temail'] = $teacher['email'];

        return view('classS', ['class' => $class, 'file' => $files]); //->with('file', json_decode($files, true));
    }

    public function returnteacher($id)
    {
        $teacher = self::getUser($id);
        return view('teacherProfile', ['tech' => $teacher]);
    }

    public function returnstudent($id)
    {
        $student = self::getUser($id);
        return view('studentProfile', ['stud' => $student]);
    }

    public function returnclassT($classid)
    {
        $class = self::getClass($classid);
        $files = self::getFiles($classid);
        $students = self::getStudents($classid);
        foreach ($students as $student) {
            $student['name'] = self::getUser($student['studentid'])['name'];
        }

        return view('classT', ['class' => $class, 'file' => $files, 'students' => $students]);
    }

    public function uploadfile(Request $request)
    {
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'mimes:pdf,ppt,pptx,pptm'
        ]);
        if ($request->hasfile('filenames')) {
            foreach ($request->file('filenames') as $file) {
                $name = time() . '.' . $file->extension();
                $file->move(base_path() . '/storage/app/public', $name);
                $data[] = $name;
            }
        }


        $file = new File();
        $file->classid = $request->classid;
        $file->FileName =  $name;
        $file->FileDecoded = json_encode($data);
        $file->save();


        return back()->with('success', 'Your files has been send successfully');
    }
}
