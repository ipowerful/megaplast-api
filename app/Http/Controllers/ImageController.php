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
        $validatedData[ 'filename' ] = $request->file('filename')->store('images/product');
        $data = Image::create($validatedData);

        //return response($data, Response::HTTP_CREATED);
        return $this->sendResponse($data, 'Изображение успешно добавлено');
    }

    public function update(ImageStoreRequest $request, $id)
    {
        $result = Image::findOrFail($id)->update($request->validated());
        if ($result) {
            $productColor = Image::findOrFail($id);
//            $productColorResource = new ProductColorResourceUser($productColor);
            return $this->sendResponse($productColor, 'Изображение успешно изменено', 202);
        } else {
            return $this->sendError('Ошибка изменения Изображения', [], 500);
        }
    }

    public function destroy(Image $image)
    {
//        if (File::exists($image->image)) {
//            $result = File::delete($image->image);
//        }
//        echo $result;
//        exit;


        if (Storage::delete($image->filename)) {
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
