<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ImageRequest;
use App\Http\Requests\ProductRequest;
use App\Http\Services\ProductRecordService;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(6);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function store(ProductRequest $request)
    {
        $product = \DB::transaction(function () use ($request) {
            return ProductRecordService::create(
                $request->getName(),
                $request->getPrice(),
                $request->getDescription(),
                $request->getIsActive()
            );
        });

        return redirect()->route('products.create')->with('message', "{$product->getName()} Created");
    }

    public function update(Product $product, ProductRequest $request)
    {
        $product = \DB::transaction(function () use ($product, $request) {
            return ProductRecordService::update(
                $product,
                $request->getName(),
                $request->getPrice(),
                $request->getDescription(),
                $request->getIsActive()
            );
        });

        return redirect()->route('products.show', $product)->with('message', "{$product->getName()} Updated");
    }

    public function destroy(Product $product)
    {
        $product = \DB::transaction(function () use ($product) {
            return ProductRecordService::delete($product);
        });

        return redirect()->route('products.index')->with('message', "{$product->getName()} Deleted");
    }

    public function storeImage($productId, ImageRequest $request)
    {
        Product::find($productId)->addMedia($request->file('image'))->toMediaCollection('images');
        return back()->with('message', 'Image uploaded');
    }
}
