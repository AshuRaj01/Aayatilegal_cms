<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect('cb-admin')->with('error', 'Please login first.');
        }

        // ✅ Fetch categories from DB
        $categories = Category::orderBy('name')->get();

        // ✅ Pass categories to view
        return view('backend.Add-post', compact('categories'));
    }

    public function getCategories()
    {
        $categories = Category::orderBy('name')->get(['id', 'name']);

        return response()->json([
            'status' => true,
            'categories' => $categories
        ]);
    }
    
    public function uploadFeaturedImage(Request $request)
    {
        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');

                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('public/featured-images', $filename);
                $url = asset('storage/featured-images/' . $filename);

                // ✅ Save to `media` table
                DB::table('media')->insert([
                    'file_path' => 'featured-images/' . $filename,
                    'file_type' => $file->getClientMimeType(),
                    'user_id'   => Auth::id() ?? 0,
                    'created_at'=> now(),
                    'updated_at'=> now()
                ]);

                return response()->json([
                    'status' => true,
                    'message' => 'Image uploaded and saved in media table',
                    'url' => $url,
                    'path' => 'featured-images/' . $filename,
                    'type' => $file->getClientMimeType()
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => 'No image uploaded'
            ]);
        } catch (\Exception $e) {
            Log::error("Upload failed: " . $e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'Server error: ' . $e->getMessage()
            ]);
        }
    }

    public function store(Request $request)
    {
        try {
            // Create post
            $post = new Post();
            $post->title = $request['title'];
            $post->content = $request['content'];
            $post->status = $request['status'];
            $post->category_id = $request['category_id'];
            $post->featured_image = $request['featured_image'] ?? null;
            $post->tags = $request['tags'] ?? null;

            // SEO metadata
            $post->meta_title = $request['meta_title'] ?? $post->title;
            $post->meta_slug = $request['meta_slug'] ?? Str::slug($post->title);
            $post->meta_description = $request['meta_description'] ?? null;

            return response()->json([
                'status' => true,
                'message' => 'Post created successfully!',
                'data' => $post
            ]);

            // $post->save();

            // return response()->json([
            //     'status' => true,
            //     'message' => 'Post created successfully',
            //     'data' => $post
            // ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create post',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
