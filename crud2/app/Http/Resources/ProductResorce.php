<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResorce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'id'=> $this->id,
          'short_name'=>$this->short_name,
          'retail_price'=> number_format($this->retail_price/100,2),
          // 'description'=>substr($this->description, 0,50).'...',
        ];
    }
}
