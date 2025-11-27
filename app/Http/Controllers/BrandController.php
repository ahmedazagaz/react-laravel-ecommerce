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
        $data  = $request->validate([
            'name'  => 'required|string|max:255',
            'slug'  => 'required|string|unique:brands,slug',
            'image' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $brand = Brand::create($data );

        return response()->json($brand, 201);
    }
    public function show(Brand $brand)
{
    return response()->json($brand);
}
    public function update(Request $request, Brand $brand)
    {
        $data  = $request->validate([
            'name'  => 'string|max:255',
            'slug'  => 'string|unique:brands,slug,' . $brand->id,
            'image' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $brand->update($data );

        return response()->json($brand);
    }
    public function destroy(Brand $brand)
{
    $brand->delete();

    return response()->json(['message' => 'Brand deleted']);
}

}
