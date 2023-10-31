<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\ProductColorsRequest;
use App\Models\ProductColor;

class ProductColorController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function list(string $product_id)
    {
        $productColor = ProductColor::where('product_id', $product_id)->get();
        return $this->sendResponse($productColor, 'Product colors retrieved successfully');
    }


    public function colorsByProduct(string $product_id)
    {
        $productColor = ProductColor::where('product_id', $product_id)->get();
        return $this->sendResponse($productColor, 'Product colors retrieved successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductColorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductColor $productColor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductColor $productColor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductColorRequest $request, ProductColor $productColor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductColor $productColor)
    {
        //
    }
}
