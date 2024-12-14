<?php

namespace App\Http\Controllers;

use App\dtr_data;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Illuminate\Contracts\Support\ValidatedData;

class BiometricController extends Controller
{
    //
    public function recordTime(Request $request)
    {
        // $user = auth('web')->user();
        $user = auth('web')->user();
        $date = Carbon::now('Asia/Manila')->toDateString(); 
        // $time = Carbon::now()->toTimeString();
        $timez = Carbon::now();
        $time = $timez-> timezone('Asia/Manila')->format('h:i a'); 
        
        // $record = dtr_data::firstOrCreate(['emp_id' => $user->id, 'day' => $date]);
        $record = dtr_data::firstOrCreate(['emp_id' => 'bps-2024-04736', 'day' => $date]);
    
        // Determine which field to update based on the current time
        if (is_null($record->time_in_morning)) {
            $record->update(['time_in_morning' => $time]); 
        } elseif (is_null($record->time_out_morning)) {
            $record->update(['time_out_morning' => $time]);
        } elseif (is_null($record->time_in_afternoon)) {
            $record->update(['time_in_afternoon' => $time]);
        } elseif (is_null($record->time_out_afternoon)) {
            $record->update(['time_out_afternoon' => $time]);
            $this->calculateUndertime($record); // Calculate undertime after the last update
        }
    
        // return response()->json([
        //     'message' => 'Time recorded successfully',
        //     'record' => $record
        // ]);
        return redirect()->route('timerecord')->with('success','Successfully Recorded');
    }
    
    private function calculateUndertime(dtr_data $record)
    {
      $morning_hours = 4; // Expected hours for the morning session
      $afternoon_hours = 4; // Expected hours for the afternoon session
      
      // Calculate morning undertime in minutes
      if ($record->time_in_morning && $record->time_out_morning) {
         ( $morning_duration_minutes = Carbon::parse($record->time_in_morning)->diffInMinutes(Carbon::parse($record->time_out_morning)));
          $record->undertime_morning = max(0,($morning_hours * 60) - $morning_duration_minutes);
      }
      
      // Calculate afternoon undertime in minutes
      if ($record->time_in_afternoon && $record->time_out_afternoon) {
          $afternoon_duration_minutes = Carbon::parse($record->time_in_afternoon)
              ->diffInMinutes(Carbon::parse($record->time_out_afternoon));
          $record->undertime_afternoon = max(0, ($afternoon_hours * 60) - $afternoon_duration_minutes);
      }
      
      // Save the record with undertime in minutes
      $record->save();
      
    }


    public function rangetime(Request $request)
    {
        if ($request == null){
         dtr_data::all();
            return view('portal.employee.mydtr',compact('records')); 
        }

        list($startDate, $endDate) = explode('to', $request['rangedate']);
        // // Convert to Carbon instances
        $startDate = Carbon::parse($startDate);
        $endDate = Carbon::parse($endDate);

        // $records = dtr_data::where('emp_id', auth()->id())->get();
        $records = dtr_data::whereBetween('day', [$startDate,$endDate])->get();
        return view('portal.employee.mydtr', compact('records'));
    }

    public function getAll()
    {
        // $records = dtr_data::where('emp_id', auth()->id())->get();
        $records = dtr_data::all();
        return view('portal.employee.mydtr',compact('records')); 
        
    }
    

}
