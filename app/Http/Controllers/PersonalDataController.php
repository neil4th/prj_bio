<?php

namespace App\Http\Controllers;

use App\person_data;
use Illuminate\Http\Request;

class PersonalDataController extends Controller
{
    //
    // display all list of personaldata
    public function getAllpersonalData()
    {
        $personaldata = person_data::all();
        return view('portal.hrms.employee_candidate',compact('personaldata'));
    }

      // store a new record of employee
    public function createNewpersonalData(Request $request)
    {
        $validatedData = $request->validate([
            'firstname'=> 'string', 
            'middlename'=> 'nullable', 
            'lastname'=> 'string', 
            'name_ext'=> 'nullable', 
            'dateofbirth'=> 'string', 
            'sex'=>'nullable', 
            'address'=> 'nullable',  
            'contact_number'=> 'string', 
            'email'=> 'nullable', 
            'civil_status'=> 'string', 
            'citizenship'=> 'string', 
            'religion'=> 'nullable', 
            'height'=> 'nullable', 
            'weight'=> 'nullable', 
            'spouse'=> 'nullable',  
            'spouse_occupation'=> 'nullable',  
            'name_of_children'=> 'nullable',  
            'name_of_children_birthday'=> 'nullable',  
            'father'=> 'nullable',  
            'father_occupation'=> 'nullable',  
            'mother'=> 'nullable',  
            'mother_occupation'=> 'nullable',  
            'language_dialect'=> 'nullable', 
            'contact_person_name'=> 'nullable',  
            'contact_person_number'=> 'nullable'
          ]);
          $personaldata = person_data::create($validatedData);
        //   return response()->json($personaldata,201);
          return redirect()->route('newPerson')->with('success', 'Personal Data Sheet Saved!');
      }
    // display the specified resource
    public function getpersonalData(person_data $personaldata) {
     
        return response()->json($personaldata);
    }
    
    // update employee information
    public function updatepersonalDataInfo(Request $request,person_data $personaldata){
    $validatedData = $request->validate([
        'employee_id' => ['required','string'], 
        'firstname' => ['required','min:2', 'max:30'], 
        'middlename' => ['required','min:2', 'max:30'],
        'lastname' => ['required','min:2', 'max:30'],
        'birthday' => ['required','string'],
        'address' => ['required','string'],
        'contact' => ['required','string'],
        'contact_person' => ['required','string'],
        'employment_date' => ['required','string'],
        'employment_status' => ['required','string'],
        'department' => ['required','string'],
        'position' => ['required','string'],
        'job_title' => ['required','string'],
        'supervisor' => ['required','string'],
        'manager' => ['required','string']
    ]);
    $personaldata->update($validatedData);
    return response()->json($personaldata,200);
}

// remove the specified employee record from storage; 
// dev: records should not be deleted or remove, just move to separte tables or mark as inactive for future data referrence.
// use with caution
public function removepersonalData(person_data $personaldata) {
 $personaldata->delete();
 return response()->json(null,204);
}


}
