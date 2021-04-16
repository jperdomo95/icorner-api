<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Team};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = User::create([
            'name'     => 'Julio',
            'username' => 'julio151',
            'email'    => 'jperdomocorrea@gmail.com',
            'password' => bcrypt('J0estars'),
            'cellphone'=> '+584122566503',
            'cellphone_confirmed' => true,
            'current_team_id' => 1,
            'is_teacher' => true,
        ]);

        User::create([
            'name'     => 'Kristopher',
            'username' => 'kragero141',
            'email'    => 'kragero@gmail.com',
            'password' => bcrypt('J0estars'),
            'cellphone' => '+58412256653',
            'current_team_id' => 2,
            'is_teacher' => true
        ]);

        $team = Team::create([
            'user_id' => 1,
            'name' => 'Administrators',
            'personal_team' => false,
        ]);

        $team = Team::create([
            'user_id' => 2,
            'name' => 'Teachers',
            'personal_team' => false,
        ]);

        $team->users()->sync(2, 2);


        User::factory()->times(10)
        ->create();
    }
}
