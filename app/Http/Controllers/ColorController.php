<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ColorRequest;
use App\Models\Color;

class ColorController extends Controller
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
        return Color::all();
    }

    public function show(Color $color)
    {
        return $color;
    }

    public function store(Color $request)
    {
//        $request->validate(Color::$rules);
//        return Color::create($request->all());
        return Color::create($request->validated());

//        $color = Color::create($request->all());

//        return response()->json($color, 201);
    }

    public function update(Color $request, Color $color)
    {
//        $request->validate(Color::$rules);

        $color->update($request->all());
        return response()->json(['data' => $color], 202);
    }

    public function destroy(Color $color)
    {
        $color->delete();
        return response()->json(null, 204);
    }
}
