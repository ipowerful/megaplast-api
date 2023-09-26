<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ProductResource::collection(Product::all());
        return $this->sendResponse($products, 'Products retrieved successfully.');
    }

    public function userIndex()
    {
        $products = ProductResource::collection(Product::all());
        return $this->sendResponse($products, 'Products retrieved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $this->sendResponse($product, 'Product retrieved successfully.');
    }

    public function userShow(Product $product)
    {
        return $this->sendResponse($product, 'Product retrieved successfully.');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());
        return $this->sendResponse($product, 'Товар успешно добавлен', 201);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        $product->industries()->sync($request->input('industry_ids', []));
        return $this->sendResponse($product, 'Товар успешно изменен', 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return $this->sendResponse([], 'Товар успешно удален');
    }
}
