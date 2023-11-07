<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductColorResourceAdmin extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'color_id' => $this->color_id,
            'name' => $this->color->name,
            'slug' => $this->color->slug,
            'price' => $this->price,
            'price_old' => $this->price_old,
            'is_in_stock' => $this->is_in_stock,
            'images' => ImageResource::collection($this->images),
        ];
    }
}
