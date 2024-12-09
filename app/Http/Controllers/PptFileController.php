<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PptFile;
use App\Models\PptFile2;
use Illuminate\Support\Facades\Auth;

class PptFileController extends Controller
{
    // Ensure only teachers can upload files to Table 1
    public function uploadToTable1(Request $request)
    {
        // Get the authenticated user's role
        $userType = Auth::user()->user_type;

        // Check if the user is not a teacher
        if ($userType !== 'teacher') {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to upload files.');
        }

        // Validate file
        $request->validate([
            'ppt_file' => 'required|mimes:ppt,pptx,pdf|max:20480',
        ]);

        // Check if the file is present
        if ($request->hasFile('ppt_file')) {
            $file = $request->file('ppt_file');
            $path = $file->store('uploads', 'public');

            // Store file details in Table 1
            PptFile::create([
                'name' => $path,
                'original_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getMimeType(),
            ]);

            return redirect()->route('dashboard')->with('success', 'File uploaded successfully to Table 1.');
        }

        return back()->withErrors('No file selected.');
    }

    // Ensure only teachers can upload files to Table 2
    public function uploadToTable2(Request $request)
    {
        $userType = Auth::user()->user_type;
        if ($userType !== 'teacher') {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to upload files.');
        }

        $request->validate([
            'ppt_file' => 'required|mimes:xlsx,xls,xlsb,xltx,csv,xltm|max:20480',
        ]);

        if ($request->hasFile('ppt_file')) {
            $file = $request->file('ppt_file');
            $path = $file->store('uploads', 'public');

            // Store file details in Table 2
            PptFile2::create([
                'name' => $path,
                'original_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getMimeType(),
            ]);

            return redirect()->route('dashboard')->with('success', 'File uploaded successfully to Table 2.');
        }

        return back()->withErrors('No file selected.');
    }

    // Download file from Table 1
    public function download($id)
    {
        $pptFile = PptFile::findOrFail($id);
        $path = storage_path('app/public/' . $pptFile->name);

        return response()->download($path, $pptFile->original_name, [
            'Content-Type' => $pptFile->mime_type,
        ]);
    }

    // Download file from Table 2
    public function downloadFromTable2($id)
    {
        $pptFile = PptFile2::findOrFail($id);
        $path = storage_path('app/public/' . $pptFile->name);

        return response()->download($path, $pptFile->original_name, [
            'Content-Type' => $pptFile->mime_type,
        ]);
    }

    // Show slides based on user type
    public function showSlides()
    {
        $userType = Auth::user()->user_type;
        
        if ($userType == 'student' || $userType == 'teacher') {
            $pptFiles = PptFile::all();  // Retrieve slides from Table 1
            return view('pptfiles.show', compact('pptFiles'));
        }

        return redirect()->route('dashboard')->with('error', 'You do not have permission to view slides.');
    }

    // Show attendance based on user type (teacher or student)
    public function showAttendance()
    {
        $userType = Auth::user()->user_type;
        
        if ($userType == 'student' || $userType == 'teacher') {
            // Logic to show attendance (can be a table, record, or similar)
            return view('attendance.show');
        }

        return redirect()->route('dashboard')->with('error', 'You do not have permission to view attendance.');
    }

    
}
