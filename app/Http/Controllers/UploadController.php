<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //

    function upload(Request $request)
    {
        // Get the uploaded file
        $file = $request->file("file");

        // Create a unique file name by prepending a timestamp to the original name
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Define the destination path as public/storage
        $destinationPath = public_path('storage');

        // Move the file to the public/storage folder
        $file->move($destinationPath, $fileName);

        // Pass the file name to the view
        return view('display', ['path' => "storage/{$fileName}"]);
    }
}
