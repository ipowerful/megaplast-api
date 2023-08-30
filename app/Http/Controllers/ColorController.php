<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\ColorRequest;
use App\Models\Color;


class ColorController extends BaseController
{
    public function all($keys = null)
    {
        // return $this->all();
        $data = parent::all($keys);
//        switch ($this->getMethod()) {
//            // case 'PUT':
//            // case 'PATCH':
//            case 'DELETE':
//                $data[ 'date' ] = $this->route('day');
//        }
        return $data;
    }

    public function index()
    {
        $colors = Color::all();
        return $this->sendResponse($colors, 'Colors retrieved successfully.');
    }

    public function show(Color $color)
    {
        /*if (is_null($color)) {
            return $this->sendError('Color not found');
        };*/
        return $this->sendResponse($color, 'Color retrieved successfully.');
    }

    public function store(ColorRequest $request)
    {
//        $request->validate(Color::$rules);
//        return Color::create($request->all());
        $color = Color::create($request->validated());
        return $this->sendResponse($color, 'Color created successfully.');
//        $color = Color::create($request->all());

//        return response()->json($color, 201);
    }

    public function update(ColorRequest $request, Color $color)
    {
//        $request->validate(Color::$rules);

        $color->update($request->all());
//        return response()->json(['data' => $color], 202);
        return $this->sendResponse($color, 'Color updated successfully.', 202);
    }

    public function destroy(Color $color)
    {
        $color->delete();
        return $this->sendResponse([], 'Цвет измерения успешно удален');
    }
}
