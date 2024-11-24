<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIController extends Controller
{
    //
    public function getPosition(Request $request){
        

        // You can replace this with actual position data from your database or external source
    $position = "API WORKING NOW"; // Replace with actual data if needed
    
    // Return the JSON response
    return response()->json([
        'success' => true,
        'message' => 'These are the position details.',
        'data' => $position // Return the position or user-related data here
    ], 200);

    }
}
