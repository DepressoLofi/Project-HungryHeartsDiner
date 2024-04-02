<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:20',
        ]);

        Category::create($validated);
        return redirect()->route('admin.category.index')->with('success', 'Category created successfully!');
    }

    public function destroy()
    {
    }
}
