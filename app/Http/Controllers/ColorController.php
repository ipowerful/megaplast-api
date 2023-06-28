<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    public function index()
    {
        return Color::all();
    }

    public function show(Color $color)
    {
        return $color;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:colors,name',
            'alias' => 'required|string|max:20|unique:colors,alias',
        ]);

        return Color::create($request->all());
    }

    public function update(Request $request, Color $color)
    {
        $color->update($request->all());

        return response()->json($color, 200);
    }

    public function destroy(Color $color)
    {
        $request->validate([
            'color' => 'required|integer|unique:colors,id',
        ]);

        $color->delete();

        return response()->json(null, 204);
    }
}
