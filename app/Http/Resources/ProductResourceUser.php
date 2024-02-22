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

        $industries = $this->industries()->select('id')->get();
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
            'article' => $this->article,
            'is_popular' => $this->is_popular,
            'measure_name' => $this->measure->name,
            'category_id' => $this->category->id,
            'industry_ids' => $industry_ids,
            'badge_ids' => $badge_ids,

            'colors' => ProductColorResourceUser::collection($this->colors),
        ];
    }
}
