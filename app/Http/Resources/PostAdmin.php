<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Post;
class PostAdmin extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return[

           'id'=>$this->id,
           'title'=>$this->title,
           'body'=>$this->body,
           'price'=>$this->price,
           'user'=>[
            'id' =>$this->user->id,
            'name' =>$this->user->name,
            'email'=>$this->user->email
           ],
         'category'=>[
             'id'=>$this->category->id,
             'name'=>$this->category->name,
         ]
       ];
    }
}
