<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('cb-admin')->with('error', 'Please login first.');
        }
        // Logic to display media items
        return view('media.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $file = $request->file('file');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);

        Media::create([
            'file_path' => $filename,
            'file_type' => 'image',
            'user_id' => auth()->id() ?? null,
        ]);

        return back()->with('success', 'Image uploaded successfully.');
    }
}
