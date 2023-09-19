<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Http\Requests\StockRequest;
use App\Http\Resources\StockResource;
use App\Http\Controllers\BaseController as BaseController;

class StockController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = StockResource::collection(Stock::all());
        return $this->sendResponse($stocks, 'Stocks retrieved successfully.');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StockRequest $request)
    {
        $stock = Stock::create($request->validated());
        return $this->sendResponse($stock, 'Наличие успешно добавлено', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stock)
    {
        return $this->sendResponse($stock, 'Stock retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StockRequest $request, Stock $stock)
    {
        $stock->update($request->validated());
        return $this->sendResponse($stock, 'Наличие успешно изменено', 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {
        $stock->delete();
        return $this->sendResponse([], 'Наличие успешно удалено');
    }
}
