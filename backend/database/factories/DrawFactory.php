<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Draw>
 */
class DrawFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->sentence(random_int(1, 4));
        return [
            'name' => $name,
            'description' => fake()->paragraph(4, true),
            'slug' => Str::slug($name, '-'),
            'path' => 'https://picsum.photos/800/600?random=' . random_int(1, 1000),
            'like' => random_int(0, 100),
            'is_published' => random_int(0, 1),
        ];
    }
}
