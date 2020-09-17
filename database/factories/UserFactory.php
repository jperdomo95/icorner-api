<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->userName();
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'cellphone' => $this->faker->e164PhoneNumber,
            'email_verified_at' => now(),
            'username' => $name,
            'password' => bcrypt('1234'), // 1234
            'remember_token' => Str::random(10),
        ];
    }
}
