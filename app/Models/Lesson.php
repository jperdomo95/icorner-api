<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $casts = [
        'lesson_start_date' => 'datetime:UTC',
        'lesson_end_date' => 'datetime:UTC'
    ];

    protected $fillable = [
        'teacher_id', 'student_name', 'lesson_start_date', 'lesson_end_date', 'subject', 'description'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
