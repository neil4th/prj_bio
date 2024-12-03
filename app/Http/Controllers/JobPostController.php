<?php

namespace App\Http\Controllers;

use App\jobposts_data;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    //
    public function createJobpost(Request $request)
    {
        $validatedData = $request->validate([
            'position'=> 'nullable', 
            'role'=> 'nullable', 
            'description'=>'nullable', 
          ]);
          jobposts_data::create($validatedData);
        //   return response()->json($personaldata,201);
          return redirect()->route('jobPosting')->with('success', 'Job Posted!');
      }
}
