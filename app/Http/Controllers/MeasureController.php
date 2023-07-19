<?php

namespace App\Http\Controllers;

use App\Models\Measure;
use App\Http\Requests\MeasureRequest;
use App\Http\Controllers\BaseController as BaseController;

class MeasureController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $measures = Measure::all();
        return $this->sendResponse($measures, 'Measures retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MeasureRequest $request)
    {
        $measure = Measure::create($request->validated());
        return $this->sendResponse($measure, 'Единица измерения успешно добавлена', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Measure $measure)
    {
        return $this->sendResponse($measure, 'Measure retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MeasureRequest $request, Measure $measure)
    {
        $measure->update($request->validated());
        return $this->sendResponse($measure, 'Единица измерения успешно изменена', 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Measure $measure)
    {
        $measure->delete();
        return $this->sendResponse([], 'Единица измерения успешно удалена');
    }
}
