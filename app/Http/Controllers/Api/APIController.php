<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Throwable;

class APIController extends Controller
{
    //
    public function getPosition(Request $request)
    {


        // You can replace this with actual position data from your database or external source
        $position = "API WORKING NOW"; // Replace with actual data if needed

        // Return the JSON response
        return response()->json([
            'success' => true,
            'message' => 'These are the position details.',
            'data' => $position // Return the position or user-related data here
        ], 200);
    }

    public function uploadFingerprint(Request $request)
    {
        // Check if the request has a file
        if (!$request->hasFile('file')) {
            return response()->json(['message' => 'No file uploaded'], 400);
        }

        $file = $request->file('file');

        // Check if the file is valid
        if (!$file->isValid()) {
            return response()->json(['message' => 'Invalid file upload'], 400);
        }

        // Generate a unique file name for the image
        $fileName = 'fingerprint_' . time() . '.png';

        // Store the image in the public folder
        $filePath = $file->storeAs('fingerprints', $fileName, 'public');

        // Return success response with the file URL
        return response()->json([
            'message' => 'Fingerprint uploaded successfully',
            'file_url' => asset('storage/' . $filePath),
        ], 201);
    }
}
