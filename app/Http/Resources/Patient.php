<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Patient extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
          return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'issue' => $this->issue,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'gender' => $this->gender,
            'age' => $this->age,
            'description' => $this->description,
            'image' => $this->image,

        ];
    }

    public function with($request){
        return [
           'version' => '1.0.0',
           'author_url' => url('http://rogo.ng.com'),
        ];
    }
}
