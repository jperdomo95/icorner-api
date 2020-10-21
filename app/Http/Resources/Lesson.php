<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Lesson extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray([
            'teacher' => $this->teacher_id,
            'student' => $this->student_id,
            'date' => $this->lesson_date,
            'details' => $this->subject,
            'label' => $this->description,
            'student' => User::collection($this->whenLoaded('student'))
        ]);
    }
}
