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
//        $stock = StockResource::make($this->stock);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'alias' => $this->alias,
            'stock' => new StockResource($this->stock),
            'measure' => new MeasureResource($this->measure),
        ];
    }
}
