<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nisn'=> fake()->randomNumber(),
            'student_name'=> fake()->name(),
            'user_id'=> rand(0,1) === 0 ? 1 : User::pluck('id')->random(),
            'email'=> fake()->email(),
            'place_of_birth' => fake()->city(),
            'date_of_birth'=> fake()->date(),
            'address'=> fake()->address(),
            'telp'=> fake()->phoneNumber(10)
        ];
    }
}
