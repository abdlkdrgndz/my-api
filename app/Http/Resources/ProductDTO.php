<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductDTO extends ResourceCollection
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'productData';

    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'datas' => $this->collection,
            'meta' => [
                'empty' => $this->collection->isEmpty(),
                'count' => $this->collection->count(),
                'avg' => $this->collection->avg('quantity'),
                'types' => $this->collection->pluck('name'),
                //'specific_query' => $this->collection->where('id', 3)->pluck('name'),
            ],
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return array|string[]
     */
    public function with($request)
    {
        return ['status' => 'success'];
    }
}
