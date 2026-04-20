<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard');
    }

    public function store(Request $request)
    {
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'popularity' => $request->popularity ? true : false,
        ]);

        return redirect()->back();
    }
}
