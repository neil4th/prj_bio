<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position; // Assuming you have a Position model

use Illuminate\Support\Facades\Log;

class PositionEntry extends Controller
{
    //
    public function store(Request $request)
    {
        // Get the form data directly from the request
    $positionTxt = $request->input('position_txt');
    $roleTxt = $request->input('role_txt');

    // Create a new Position record directly
    Position::create([
        'position' => $positionTxt,
        'role' => $roleTxt
    ]);

    // Redirect with a success message
    return redirect()->route('position-page')->with('success', 'Position saved successfully!');
    }
}
