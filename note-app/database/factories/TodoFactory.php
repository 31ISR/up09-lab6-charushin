<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->realText(75),
            'done' => $this->faker->boolean(20), 
            'urgent' => $this->faker->boolean(30), 
            'date_completed' => $this->faker->optional(0.2)->dateTime('now'), 
            'user_id' => \App\Models\User::factory() 
        ];
    }
}