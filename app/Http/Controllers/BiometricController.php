<?php

namespace App\Http\Controllers;

use App\dtr_data;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class BiometricController extends Controller
{
    //
    public function timein(Request $request)
    {
        $validatedData = $request->validate([
            'emp_id'=> 'nullable',
            'day'=> 'string',
            'time'=> 'nullable',
            'type'=> 'nullable',
          ]);
          
          $personaldata = dtr_data::create($validatedData);
        //   return response()->json($personaldata,201);
          return redirect('/');
      }

    public function timeout(Request $request)
    {
        $validatedData = $request->validate([
            'emp_id'=> 'nullable',
            'day'=> 'string',
            'time'=> 'nullable',
            'type'=> 'nullable',
          ]);
          
          $personaldata = dtr_data::create($validatedData);
        //   return response()->json($personaldata,201);
          return redirect('/');
      }
    
}
