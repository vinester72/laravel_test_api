<?php

namespace App\Http\Resources\Article;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Category\CategoryResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'       => $this->id,
            'title'    => $this->title,
            'slug'     => $this->slug,
            'excerpt'   => $this->excerpt,
            'content'  => $this->content,
            'image'    => $this->image,
            'likes'    => $this->likes,
            'category' => new CategoryResource($this->category)
        ];
    }
}
