<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gerbong>
 */
class GerbongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama'          => fake()->word(),
            'kode'          => fake()->numerify('#######'),
            'jumlah_kursi'  => mt_rand(20,40),
        ];
    }
}
