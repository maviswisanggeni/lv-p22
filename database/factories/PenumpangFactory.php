<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\penumpang>
 */
class PenumpangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kereta_id' => mt_rand(1,5),
            'nik'       => fake()->nik(),
            'nama'      => fake()->name(),
            'umur'      => mt_rand(1, 99),
            'alamat'    => fake()->address(),
        ];
    }
}
