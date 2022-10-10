<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Admin::class;
    public function definition()
    {
        return [
              //multi-associative array
              'firstname' => fake()->name(),
              'lastname' => fake()->name(),
              'email' => fake()->unique()->safeEmail(),
              'address' => fake()->address()
        ];
    }
}
