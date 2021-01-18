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
        return [
            'pseudo' => $this->faker->word, 
            'isadmin' => Str::random(0),     
            'isseller' => Str::random(0),                                  
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->name,
            'sex' => $this->faker->titleMale,
            'phone' => $this->faker->PhoneNumber,
            'remember_token' => Str::random(10),
            'adress' => $this->faker->address,
            'code_postal' => $this->faker->postcode,
            'department' => $this->faker->streetName,
            'country' => $this->faker->country,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
}
