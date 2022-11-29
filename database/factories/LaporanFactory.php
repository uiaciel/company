<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laporan>
 */
class LaporanFactory extends Factory
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
            'slug' => Str::slug($title),
            'user_id' => 1,
            'date_gmt' => $this->faker->date(),
            'content' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['Publish', 'Draf']),
        ];
    }
}
