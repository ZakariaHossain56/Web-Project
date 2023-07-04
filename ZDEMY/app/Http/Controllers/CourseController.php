<?php

namespace App\Http\Controllers;

use App\Models\AllCourses;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //Show all courses
    public function index(){
        // return view('courses',[
        //     'courses'=>AllCourses::latest()->filter(request()->only(['search']))->get()
        // ]);
        $courses=AllCourses::latest()->filter(request()->only(['search']))->get();
        // $categories = AllCourses::orderBy('created_at', 'desc')->get();
        $categories = AllCourses::distinct('category')
        ->pluck('category');

        return view('courses', compact('courses', 'categories'));
    }

    public function viewbycategory(Request $request){
        //dd(request('category'));
        $category = request('category');
        $courses = AllCourses::where('category', $category)->get();
        $categories = AllCourses::distinct('category')
        ->pluck('category');
        return view('courses', compact('courses', 'categories'));


    }

    //Show single course
    public function show($id){
        //dd($course->id);
        $course = AllCourses::find($id);
        $authorid=$course->author_id;
        $user=User::find($authorid);
        $userid=auth()->user()->id;

    // Retrieve the 'outcome' attribute value from the model
    $outcome = $course->outcome;

    // Convert comma-separated values into an array
    $outcomeArray = explode(',', $outcome);

        return view('coursedetails', [
            'id' => $id,
            'course' => $course,
            'outcomeArray' => $outcomeArray,
            'user' => $user,
            'userid' => $userid
        ]);
    }



    public function showvideo($id){
        //dd($id);
        $course=AllCourses::find($id);

        $titles = $course->titles;
        $ytid = $course->ytid;
        $outcome = $course->outcome;
        
    // Convert comma-separated values into an array


        // Convert comma-separated values into an array
        $titlesArray  = explode(',', $titles);
        $ytidsArray  = explode(',', $ytid);
        $outcomeArray = explode(',', $outcome);


        return view('coursevideos',[
            'course'=>$course,
            // 'data'=>$data
            'titlesArray'=>$titlesArray,
            'ytidsArray'=> $ytidsArray,
            'outcomeArray'=>$outcomeArray
        ]);
    }

    // public function showcategories(){
    //     $categories = AllCourses::orderBy('created_at', 'desc')->get();
    //     $data=compact('categories');
    //     return view('courses')->with($data);

    // }

    public function create(){
        return view('addcourse');
    }

    public function store(Request $request){
        //ddd($request->all());
        //dd($request->file('icon'));
        $attributes = request()->validate([
            'title' => 'required|unique:all_courses,title',
            'category'=>'required',
            'icon' => 'file|mimes:jpeg,png|max:102400',
            'overview'=>'required',
            'outcome'=>'required',
            'ytid'=>'required',
            'duration'=>'required',
            'price'=>'required',
            'titles'=>'required',
        ]);




        $user = auth()->user(); // Get the authenticated user
        //  dd($user->username);

        $attributes['author_id'] = $user->id; // Set the author ID to the authenticated user's ID
        $attributes['author'] = $user->username; // Set the author's username

        //dd($attributes['author']);


        if($request->hasFile('icon')){
            $attributes['icon']=$request->file('icon')->store('icon','public');
        }

        //   $filename=$request->file('icon')->getClientOriginalName();
        //   $request->file('icon')->storeAs('public/icon',$filename);
        //  echo $filename;
          //$attributes['icon']=$filename;
        //dd($attributes['icon']);

         AllCourses::create($attributes);
         return redirect('/home/courses')->with('success', 'Course submitted successfully');

    }
}
