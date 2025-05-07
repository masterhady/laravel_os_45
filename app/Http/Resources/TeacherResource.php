<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [

            "Teacher_name" => $this->name,
            "email" => $this->email,
            // "department" => $this->department->name ?? null
            "department" => new DepartmentResource($this->department), 



        ];
    }
}
