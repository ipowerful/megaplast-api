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

    public function show($id)
    {
        return Color::find($id);
    }

    public function store(Request $request)
    {
        return Color::create($request->all());
    }
}
