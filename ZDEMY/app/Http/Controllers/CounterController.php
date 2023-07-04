<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function getCourseId(Request $request)
{
    $id = $request->input('id');
    // Perform any necessary logic to retrieve the $course_id based on the $id

    // Return the $course_id as a JSON response
    return response()->json([
        'course_id' => $id
    ]);
}
}
