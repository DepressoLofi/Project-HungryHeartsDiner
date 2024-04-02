<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Category;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index()
    {
        return view('admin.dish.index');
    }

    public function create()
    {
        $categories = Category::get();

        return view('admin.dish.create', compact('categories'));
    }

    public function store(Request $request)
    {        
        $validated = $request->validate([
            'name' => 'required | string',
            'price' => 'required',
            'description' => 'required',
            'picture' => 'required | mimetypes:image/jpeg,image/png,image/jpg,image/gif,image/webp | max:2048',
            'category_id' => 'required | exists:categories,id'
        ]);

        $fileName = time() . $request->file('picture')->getClientOriginalName();
        $path = $request->file('picture')->storeAs('dishes', $fileName, 'public');
        $imgPath = '/storage/' . $path;

        $dish = new Dish();
        $dish->name = $validated['name'];
        $dish->price = $validated['price'];
        $dish->description = $validated['description'];
        $dish->picture = $imgPath; 
        $dish->category_id = $validated['category_id'];
        $dish->save();
    
        return redirect()->route('admin.dish.index')->with('success', "Dish added successfully");
    }


}
