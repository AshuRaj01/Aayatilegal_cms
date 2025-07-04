<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('cb-admin')->with('error', 'Please login first.');
        }
        
        // Paginate categories with post count
        $categories = Category::withCount('posts')->orderBy('id', 'DESC')->paginate(10); // 10 per page

        return view('backend.category', compact('categories'));
    }

    public function store(Request $request){
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);

        // Check if category already exists
        $existingCategory = Category::where('name', $request->name)
                                    ->orWhere('slug', $request->slug)
                                    ->first();

        if ($existingCategory) {
            return redirect()->back()->withErrors(['Category already exists!'])->withInput();
        }

        // Create new category
        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function destroy($id){
        // Delete category
        Category::destroy($id);
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

    public function checkCategoryExist(Request $request)
    {
        $categoryName = $request->query('name');

        if (!$categoryName) {
            return response()->json([
                'status' => false,
                'message' => 'Category name is required.'
            ]);
        }

        $exists = Category::where('name', $categoryName)->exists();

        return response()->json([
            'status' => !$exists, // true means "available"
            'message' => $exists ? 'Category already exists.' : 'Category is available.'
        ]);
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        try {
            $category = new Category();
            $category->name = $request->name;
            $category->slug = Str::slug($request->name); // ✅ FIX: Add slug generation
            $category->save();

            return response()->json([
                'status' => true,
                'message' => 'Category added successfully.'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to add category: ' . $th->getMessage()
            ]);
        }
    }
}