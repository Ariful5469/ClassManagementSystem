<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PptFile;
use App\Models\PptFile2;

class PptFileController extends Controller
{
    public function uploadToTable1(Request $request)
    {
        $request->validate([
            'ppt_file' => 'required|mimes:ppt,pptx,pdf|max:20480',
        ]);

        $file = $request->file('ppt_file');
        $path = $file->store('uploads', 'public');

        PptFile::create([
            'name' => $path,
            'original_name' => $file->getClientOriginalName(),
            'mime_type' => $file->getMimeType(),
        ]);

        return back()->with('success', 'File uploaded successfully to Table 1.');
    }

    public function uploadToTable2(Request $request)
    {
        $request->validate([
            'ppt_file' => 'required|mimes:.xlsx,.xls,.xlsb,.xltx,.csv,.xltm|max:20480',
        ]);

        $file = $request->file('ppt_file');
        $path = $file->store('uploads', 'public');

        PptFile2::create([
            'name' => $path,
            'original_name' => $file->getClientOriginalName(),
            'mime_type' => $file->getMimeType(),
        ]);

        return back()->with('success', 'File uploaded successfully to Table 2.');
    }

    public function download($id)
    {
        $pptFile = PptFile::findOrFail($id);
        $path = storage_path('app/public/' . $pptFile->name);

        return response()->download($path, $pptFile->original_name, [
            'Content-Type' => $pptFile->mime_type,
        ]);
    }

    public function downloadFromTable2($id)
    {
        $pptFile = PptFile2::findOrFail($id);
        $path = storage_path('app/public/' . $pptFile->name);

        return response()->download($path, $pptFile->original_name, [
            'Content-Type' => $pptFile->mime_type,
        ]);
    }
}
