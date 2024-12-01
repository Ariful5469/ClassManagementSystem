<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PptFile;

class PptFileController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'ppt_file' => 'required|mimes:ppt,pptx|max:20480',
        ]);

        $file = $request->file('ppt_file');
    $path = $file->store('uploads', 'public');

    PptFile::create([
        'name' => $path,
        'original_name' => $file->getClientOriginalName(),
        'mime_type' => $file->getMimeType(),
    ]);

    return back()->with('success', 'PPT file uploaded successfully.');
    }

    public function download($id)
{
    $pptFile = PptFile::findOrFail($id);
    $path = storage_path('app/public/' . $pptFile->name);

    return response()->download($path, $pptFile->original_name, [
        'Content-Type' => $pptFile->mime_type,
    ]);
}
}
