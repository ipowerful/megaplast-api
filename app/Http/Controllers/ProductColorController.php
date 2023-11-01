<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\ProductColorsRequest;
use App\Models\ProductColor;

class ProductColorController extends BaseController
{

    public function colorsByProduct(string $product_id)
    {
        $productColor = ProductColor::where('product_id', $product_id)->get();
        return $this->sendResponse($productColor, 'Product colors retrieved successfully');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productColor = ProductColor::all()->sortByDesc('price');
        return $this->sendResponse($productColor, 'Product colors retrieved successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductColorsRequest $request)
    {
        $productColor = ProductColor::create($request->validated());
        return $this->sendResponse($productColor, 'Цвет товара успешно добавлен', 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductColorsRequest $request, ProductColor $productColor)
    {
        $productColor->update($request->validated());
        return $this->sendResponse($productColor, 'Цвет товара успешно изменен', 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductColor $productColor)
    {
        $productColor->delete();
        return $this->sendResponse([], 'Цвет товара успешно удален');
    }
}
