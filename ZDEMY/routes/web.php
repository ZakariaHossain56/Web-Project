<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SessionController;
use App\Models\AllCourses;
use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('index');
});

// Route::post('/home/courses/{id}/coursevideos/get-course-id', [CounterController::class, 'getCourseId']);


//All courses
Route::get('/home/courses',[CourseController::class,'index']);

//Single course
Route::get('/home/courses/{id}',[CourseController::class,'show']);




Route::get('/home/courses/filters/{category}', [CourseController::class, 'viewbycategory']);


Route::get('/home/about', [AboutController::class,'achievement']);

Route::get('/home/cart', [CartController::class,'showcart']);

Route::post('/home/cart', [CartController::class,'addcart']);

Route::get('/home/cart/{id}',[CartController::class,'show']);

Route::get('/home/enroll', [EnrollController::class,'showenroll']);

Route::post('/home/enroll', [EnrollController::class,'addenroll']);

Route::get('/home/enroll/{id}/coursevideos',[EnrollController::class,'showvideo']);

Route::get('/home/enroll/{id}/coursevideos/comment',[EnrollController::class,'showcomment']);

Route::post('/home/enroll/{id}/coursevideos/comment',[EnrollController::class,'submitcomment']);

Route::get('/home/enroll/{id}/coursevideos/review',[ReviewController::class,'showreview']);

Route::post('/home/enroll/{id}/coursevideos/review',[ReviewController::class,'submitreview']);

Route::get('/home/about/blog', function () {
    return view('blog');
});

Route::get('/home/about/blog/post', function () {
    return view('post');
});

Route::get('/home/contact', function () {
    return view('contact');
});

Route::get('/home/privacypolicy', function () {
    return view('privacypolicy');
});

Route::get('/home/termsandconditions', function () {
    return view('termsandconditions');
});

Route::get('/home/refundpolicy', function () {
    return view('refundpolicy');
});

Route::get('/home/faq', function () {
    return view('faq');
});

Route::get('/home/editprofile/{id}', [RegisterController::class,'showedit']);

Route::put('/home/editprofile/{id}',[RegisterController::class,'update']);


Route::get('/home/register', [RegisterController::class,'create']);

Route::post('/home/register', [RegisterController::class,'store']);

//Has to be logged out to see the login option
Route::get('/home/login', [SessionController::class,'create'])->middleware('guest');

Route::post('/home/login', [SessionController::class,'store'])->middleware('guest');



//Has to be logged in to see the logout option
Route::post('/home/logout', [SessionController::class,'destroy'])->middleware('auth');

Route::get('/home/addcourse',[CourseController::class,'create']);

Route::post('/home/addcourse',[CourseController::class,'store']);

Route::get('/home/dashboard',[DashboardController::class,'showdashboard']);


Route::get('/home/dashboard/students',[DashboardController::class,'showstudents']);

Route::delete('/home/dashboard/students/{id}', [DashboardController::class, 'destroystudents']);

Route::get('/home/dashboard/instructors',[DashboardController::class,'showinstructors']);

Route::delete('/home/dashboard/instructors/{id}', [DashboardController::class, 'destroyinstructors']);

Route::get('/home/dashboard/admins',[DashboardController::class,'showadmins']);

Route::delete('/home/dashboard/admins/{id}', [DashboardController::class, 'destroyadmins']);

Route::get('/home/dashboard/messages',[DashboardController::class,'showreviews']);

Route::get('/home/dashboard/courses',[DashboardController::class,'showcourses']);

Route::delete('/home/dashboard/courses/{id}', [DashboardController::class, 'destroycourses']);

Route::get('/home/dashboard/comments',[DashboardController::class,'showcomments']);



// Route::get('/home/dashboard/courses/{id}/edit', [DashboardController::class, 'editcourses']);



Route::get('/hi', function () {
    return response('<h1>Hello World</h1>',200);  //response function decodes the content,default status 200
});
