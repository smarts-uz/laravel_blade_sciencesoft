<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FilesUpload;

class FileUpload extends Controller
{
    public function fileUpload(Request $req){
        $req->validate([
            'name' => 'required|string',
            'path' => 'required|array'
        ]);

        $fileModel = new FilesUpload;

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }


    // public function createProject(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required|string',
    //         'path' => 'required|array',
    //     ]);

    //     /**
    //      * Save files to DB
    //      */
    //     foreach ($data['files'] as $file) {
    //         $file = json_decode($file);

    //         $dbfile = new FilesUpload;
    //         $dbfile->name = $file->name;
    //         $dbfile->path = $file->path;
    //         $dbfile->save();
    //     }

    //     return back();
    // }

    // /**
    //  * Upload the file, this method is called for each uploading media
    //  */
    // public function uploadFiles(Request $request)
    // {
    //     $path = $request->file('file')->store('projects'); // save file to storage and return path

    //     return response()->json([
    //         'name' => $request->input('name'),
    //         // 'type' => $request->input('type'),
    //         'path' => $path,
    //     ]);
    // }

}
