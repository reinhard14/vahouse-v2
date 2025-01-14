<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Administrator;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastName(),
            'contactnumber' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            // 'role_id' => $this->faker->numberBetween(2,3),
            'role_id' => $this->faker->numberBetween(3,3),
        ];

    }
    // public function configure()
    // {
    //     $this->afterCreating(function (User $user) {
    //         $user->administrator()->create([
    //             'name' => $this->faker->firstName(),
    //             'lastname' => $this->faker->lastName(),
    //             'gender' => $this->faker->randomElement(['male', 'female']),
    //             'department' => $this->faker->companySuffix(),
    //             'position' =>  $this->faker->title(),
    //             'user_id' => $this->faker->numberBetween(1,15),
    //         ]);
    //     });
    // }
    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
