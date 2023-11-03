<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResourceUser extends JsonResource
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


        $badges = $this->badges()->select('id')->get();

        $badge_ids = [];
        foreach ($badges as $key => $value) {
            array_push($badge_ids, $value[ 'id' ]);
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'name_full' => $this->name_full,
//            'slug' => $this->slug,
            'article' => $this->article,
            'price' => $this->price,
            'price_old' => $this->price_old,
            'is_popular' => $this->is_popular,
            'is_in_stock' => $this->is_in_stock,
            'measure_id' => $this->measure->id,
            'measure_name' => $this->measure->name,
            'category_name' => $this->category->name,
            'industries' => $industries,

            'category_id' => $this->category->id,
            'industry_ids' => $industry_ids,
            'badge_ids' => $badge_ids,

            'colors' => ProductColorResource::collection($this->colors),
        ];
    }
}
