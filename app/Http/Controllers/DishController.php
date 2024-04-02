<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index()
    {
        return view('admin.dishes.index');
    }
}
