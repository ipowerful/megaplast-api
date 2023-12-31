<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\ProductColorsRequest;
use App\Http\Resources\ProductColorResourceAdmin;
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
        $productColor = ProductColor::all()->sortByDesc('price')->values();
        $productColorResource = ProductColorResourceAdmin::collection($productColor);
        return $this->sendResponse($productColorResource, 'Product colors retrieved successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductColorsRequest $request)
    {
        $result = ProductColor::create($request->validated());
        if ($result) {
            $productColor = ProductColor::findOrFail($result->id);
//            $productColorResource = new ProductColorResourceUser($productColor);
            return $this->sendResponse($productColor, 'Цвет товара успешно добавлен', 201);
        } else {
            return $this->sendError('Ошибка добавления Цвета товара', [], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductColorsRequest $request, ProductColor $productColor)
    {
        $productColor->update($request->validated());
        if ($productColor) {
            return $this->sendResponse($productColor, 'Цвет товара успешно изменен', 202);
        } else {
            return $this->sendError('Ошибка изменения Цвета товара', [], 500);
        }
    }

    public function update2(ProductColorsRequest $request, $id)
    {
        $result = ProductColor::findOrFail($id)->update($request->validated());
        if ($result) {
            $productColor = ProductColor::findOrFail($id);
//            $productColorResource = new ProductColorResourceUser($productColor);
            return $this->sendResponse($productColor, 'Цвет товара успешно изменен', 202);
        } else {
            return $this->sendError('Ошибка изменения Цвета товара', [], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductColor $productColor)
    {
        $result = $productColor->delete();
        if ($result) {
            return $this->sendResponse([], 'Цвет товара успешно удален');
        } else {
            return $this->sendError('Ошибка удаления Цвета товара', [], 500);
        }
    }

    public function destroy2($id)
    {
        ProductColor::findOrFail($id)->delete();
        return $this->sendResponse([], 'Цвет товара успешно удален');
    }
}
