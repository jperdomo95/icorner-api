<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User as UserModel;

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
        return [
            'id' => $this->id,
            'summary' => $this->subject,
            'description' => $this->description,
            // 'student' => $this->student_id,
            'start' => [
                'dateTime' => $this->lesson_start_date
            ],
            'end' => [
                'dateTime' => $this->lesson_end_date
            ],
            // 'attendees' => [new User(UserModel::find($this->student_id))],
            'attendees' => [
                [
                    'displayName' => $this->student_name
                ]
            ]
        ];
    }
}
