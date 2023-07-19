<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\UnitRequest;
use App\Http\Controllers\BaseController as BaseController;

class UnitController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::all();
        return $this->sendResponse($units, 'Units retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UnitRequest $request)
    {
        $unit = Unit::create($request->validated());
        return $this->sendResponse($unit, 'Единица измерения успешно добавлена', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        return $this->sendResponse($unit, 'Unit retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UnitRequest $request, Unit $unit)
    {
        $unit->update($request->validated());
        return $this->sendResponse($unit, 'Единица измерения успешно изменена', 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();
        return $this->sendResponse([], 'Единица измерения успешно удалена');
    }
}
