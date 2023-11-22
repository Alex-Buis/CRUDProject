<?php

namespace App\Http\Controllers;

use App\Models\Liste;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view("create");
    }
    public function create()
    {
        return view('create');
    }
    public function edit()
    {
        // $movie = Movie::findOrFail($id);
        
        // Gate::allowIf($movie->user_id == Auth::user()->id);
        return view('edit');
    }
    
    
}
