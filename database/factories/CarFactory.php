<?php

namespace Database\Factories;

use App\Models\Cars;
use Illuminate\Support\Str;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' =>$this->faker ->name(),
            'description' => $this->faker->name(),
            'model' => $this->faker->name(),
            'products_on' => now(),
            
        ];
        // Cars::factory()->count(5)->create();
    }
}
