<?php

namespace App\Http\Controllers;

use App\Models\AllCourses;
use App\Models\Comment;
use App\Models\Enroll;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function showreviews(){
        $reviews=Review::all();
        $data=compact('reviews');
        return view('dashboard_messages')->with($data);
    }
    public function showdashboard(){
        $totalcourses=AllCourses::count();
        $totalstudents=User::where('role', 'student')->count();
        $totalinstructors=User::where('role', 'teacher')->count();
        $totalValue = Enroll::selectRaw("SUM(REPLACE(price, '$', '')) as total")
        ->value('total');
        $sales = Enroll::orderBy('created_at', 'desc')->take(10)->get();
        $recents = User::orderBy('created_at', 'desc')->take(10)->get();
        //dd($sales);
        $data=compact('totalcourses','totalstudents','totalinstructors','totalValue', 'sales','recents');
        return view('dashboard')->with($data);
    }

    public function showorders(){
        return view('dashboard_orders');
    }

    public function showstudents(){
        $students=User::where('role', 'Student')->get();
        // echo "<pre>";
        // print_r($instructors);
        // echo "<pre>";
        // die;

        $data=compact('students');
        return view('dashboard_students')->with($data);

    }

    public function destroystudents($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/home/dashboard/students')->with('success', 'User deleted successfully');
    }

    public function showinstructors(){
        $instructors=User::where('role', 'Teacher')->get();
        // echo "<pre>";
        // print_r($instructors);
        // echo "<pre>";
        // die;

        $data=compact('instructors');
        return view('dashboard_instructors')->with($data);
    }

    public function destroyinstructors($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/home/dashboard/instructors')->with('success', 'User deleted successfully');
    }

    public function showadmins(){
        $admins=User::where('role', 'Admin')->get();
        // echo "<pre>";
        // print_r($instructors);
        // echo "<pre>";
        // die;

        $data=compact('admins');
        return view('dashboard_admins')->with($data);
    }

    public function destroyadmins($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/home/dashboard/admins')->with('success', 'User deleted successfully');
    }

    public function showmessages(){
        return view('dashboard_messages');
    }

    public function showcourses(){
        $courses = AllCourses::orderBy('created_at', 'desc')->get();
        $data=compact('courses');
        return view('dashboard_courses')->with($data);
    }

    public function destroycourses($id){
        $item = AllCourses::findOrFail($id);
        $item->delete();

        return redirect('/home/dashboard/courses')->with('success', 'Item deleted successfully');
    }

    public function updatecourses($id){

    }

    public function showcomments(){
        $comments=Comment::all();
        $data=compact('comments');
        return view('dashboard_comments')->with($data);
        return view('dashboard_comments');
    }
}
