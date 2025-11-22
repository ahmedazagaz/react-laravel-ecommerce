<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return response()->json(Brand::all());
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'slug'  => 'required|string|unique:brands,slug',
            'image' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $brand = Brand::create($validated);

        return response()->json($brand, 201);
    }
}
