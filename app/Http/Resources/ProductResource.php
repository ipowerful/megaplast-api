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

        $industries = $this->industries()->select('id', 'name')->get();
        
        $industry_ids = [];
        foreach ($industries as $key => $value) {
            array_push($industry_ids, $value[ 'id' ]);
        }

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
            'stock' => $this->stock->slug,
            'measure_id' => $this->measure->id,
            'measure_name' => $this->measure->name,
            'category_id' => $this->category->id,
            'category_name' => $this->category->name,
            'industries' => $industries,
            'industry_ids' => $industry_ids,
            'badges' => BadgeResource::collection($this->badges),
        ];
    }
}
