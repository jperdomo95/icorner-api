<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'teacher_id' => 2,
            'student_id' => $this->faker->numberBetween($min = 3, $max = 10),
            'lesson_date' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
            'subject' => $this->faker->realText($maxNbChars = 40),
            'description' => $this->faker->realText($maxNbChars = 100),
        ];
    }
}
