<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\StoreProductPost;
use Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }

    public function index()
    {
        $products = Product::with(['user'])->get();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with('categories')->findOrFail($id);
        foreach ($product->categories as $category) {
            dump($category->tag->created_at);
        }
        dd();
        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductPost $request)
    {
        $request->validated();
        Auth::user()->products()->create($request->except('_token'));
        return redirect(route('products.index'));
    }
}
