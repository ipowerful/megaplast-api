<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Http\Requests\IndustryRequest;
use App\Http\Controllers\BaseController as BaseController;

class IndustryController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $industries = Industry::all();
        return $this->sendResponse($industries, 'Industries retrieved successfully.');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(IndustryRequest $request)
    {
        $industry = Industry::create($request->validated());
        return $this->sendResponse($industry, 'Индустрия успешно добавлена', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Industry $industry)
    {
        return $this->sendResponse($industry, 'Industry retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IndustryRequest $request, Industry $industry)
    {
        $industry->update($request->validated());
        return $this->sendResponse($industry, 'Индустрия успешно изменена', 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Industry $industry)
    {
        $industry->delete();
        return $this->sendResponse([], 'Индустрия успешно удалена');
    }

}
