<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Http\Requests\ParameterRequest;
use App\Http\Controllers\BaseController as BaseController;

class ParameterController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parameters = Parameter::all();
        return $this->sendResponse($parameters, 'Parameters retrieved successfully.');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ParameterRequest $request)
    {
        $parameter = Parameter::create($request->validated());
        return $this->sendResponse($parameter, 'Параметр успешно добавлен', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Parameter $parameter)
    {
        return $this->sendResponse($parameter, 'Parameter retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParameterRequest $request, Parameter $parameter)
    {
        $parameter->update($request->validated());
        return $this->sendResponse($parameter, 'Параметр успешно изменен', 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parameter $parameter)
    {
        $parameter->delete();
        return $this->sendResponse([], 'Параметр успешно удален');
    }
}
