<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attachment;
// use App\Http\Requests\StoreAttachmentRequest as ValidateAttachment;

class AttachmentUploadController extends Controller
{
    public function store(Request $request)
    {
        $file = $request->file('attachment');
        $file = $file->attachment;
        dd($file);
        // echo $request->attachment->originalName;
        $filePath = $request->file('attachment')->store('tesfolder');
        $attachment = Attachment::create([
            'post_id' => $request('post_id'),
            'title' => $request('title'),
            ''
        ]);
        
    }
}
