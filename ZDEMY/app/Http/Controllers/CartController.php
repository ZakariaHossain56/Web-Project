<?php

namespace App\Http\Controllers;

use App\Models\AllCourses;
use App\Models\Cart;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function show($id){
        //dd($id);
        $course = AllCourses::find($id);
        //dd($course);
        $courseid=AllCourses::find($course->id);
        $authorid=$course->author_id;
        $user=User::find($authorid);
        $userid=auth()->user()->id;

    // Retrieve the 'outcome' attribute value from the model
    $outcome = $course->outcome;

    // Convert comma-separated values into an array
    $outcomeArray = explode(',', $outcome);

        return view('coursedetailscart', [
            'id' => $id,
            'course' => $course,
            'outcomeArray' => $outcomeArray,
            'user' => $user,
            'userid' => $userid,
            'courseid'=>$courseid
        ]);
    }
    public function showcart(){
        $user=auth()->user()->id;
        //dd($user);
        $courses = Cart::where('userid', $user)->get();
        //dd($courses);
        $data=compact('courses');
        return view('cart')->with($data);
    }

    public function addcart(Request $request){
        try{
            $var=Cart::updateOrCreate([
                'courseid' => $request['courseid'],
                'title' => $request['title'],
                'category' => $request['category'],
                'icon'=>$request['icon'],
                'overview'=>$request['overview'],
                'outcome'=>$request['outcome'],
                'ytid'=>$request['ytid'],
                'duration'=>$request['duration'],
                'price'=>$request['price'],
                'titles'=>$request['titles'],
                'rating'=>$request['rating'],
                'enrolled'=>$request['enrolled'],
                'author_id'=>$request['author_id'],
                'author'=>$request['author'],
                'userid'=>$request['userid'],
            ]);
            $var->save();
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
        return redirect('/home/cart');

    }
}
