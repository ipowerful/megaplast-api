<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\ImageStoreRequest;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\Storage;


class ImageController extends BaseController
{
    public function index()
    {
        $data = Image::all();
        return $this->sendResponse($data, 'Images retrieved successfully');
    }

    public function store(ImageStoreRequest $request)
    {

        $validatedData = $request->validated();
        $validatedData[ 'image' ] = $request->file('image')->store('product/images');
        $data = Image::create($validatedData);

        //return response($data, Response::HTTP_CREATED);
        return $this->sendResponse($data, 'Изображение успешно добавлено');
    }

    public function destroy(Image $image)
    {
//        if (File::exists($image->image)) {
//            $result = File::delete($image->image);
//        }
//        echo $result;
//        exit;


        if (Storage::delete($image->image)) {
            $image->delete();
        }

//        if ($request->hasFile('file')) {
//            Storage::delete($employee->file); // If $file is path to old image
//
//            $employee->file = $request->file('file')->store('name-of-folder');
//        }

//        $image->delete();
        return $this->sendResponse([], 'Изображение успешно удалено');
    }
}
