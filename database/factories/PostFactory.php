<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $title = $this->faker->sentence();

        return [
            'title' => $title,
            // 'image' => $this->faker->imageUrl(640,480),
            'slug' => str::slug($title),
            'user_id' => 1,
            'lang' => $this->faker->randomElement(['id', 'en']),
            'id_category' => $this->faker->numberBetween(1,4),
            'date_gmt' => $this->faker->date(),
            'content' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['Publish', 'Draf']),
            'type' => $this->faker->randomElement(['Post', 'Page', 'Announ']),
            'count' => $this->faker->randomNumber(),
        ];
    }
}
