<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'name_full' => $this->name_full,
            'slug' => $this->slug,
            'article' => $this->article,
            'price' => $this->price,
            'price_old' => $this->price_old,
            'is_popular' => $this->is_popular,
            'stock_id' => $this->stock->id,
            'stock_name' => $this->stock->name,
            'measure_id' => $this->measure->id,
            'measure_name' => $this->measure->name,
            'category_id' => $this->category->id,
            'category_name' => $this->category->name,
            'industries' => $this->industries()->select('name')->get(),
        ];
    }
}
