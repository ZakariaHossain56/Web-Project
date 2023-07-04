<?php

namespace App\Http\Controllers;

use App\Models\AllCourses;
use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function achievement(){

        $teachers = User::where('role', 'teacher')->get();
        $courses = AllCourses::count();
        $students = User::where('role', 'student')->count();
        $data=compact('teachers','courses','students');
        return view('about')->with($data);
    }


}
