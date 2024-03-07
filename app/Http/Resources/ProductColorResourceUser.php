<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductColorResourceUser extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $images = [];
        foreach ($this->withMainImages as $image) {
            array_push($images, $image->filename);
        }

        return [
            'id' => $this->id,
            'name' => $this->color->name,
            'slug' => $this->color->slug,
            'price' => $this->price,
            'price_old' => $this->price_old,
            'is_in_stock' => $this->is_in_stock,
            'images' => $images,
            'images_detail' => [],
        ];
    }
}
