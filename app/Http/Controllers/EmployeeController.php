<?php

namespace App\Http\Controllers;

use App\employee_data;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //Employee controllers

    public function login_hrms(){

    }
    public function register_hrms(){

    }

    public function hiringEmployee(Request $request)
    {
        $validatedData = $request->validate([
          'person_id' => 'string',
          'employment_date' => 'string',
          'employment_status' => 'string',
          'position' => 'string',
          'department' => 'string',
          'supervisor' => 'string',
          'manager' => 'string',
          ]);
          $personaldata = employee_data::create($validatedData);
          return redirect()->route('new_person_view')->with('success', 'Personal Data Sheet Saved!');
      }
}
