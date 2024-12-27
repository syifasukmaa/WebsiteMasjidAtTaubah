<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RT>
 */
class RTFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        static $index = 1;

        $nomor_rt = str_pad($index, 2, '0', STR_PAD_LEFT); // Format ke '01', '02', ..., '10'
        $index = $index < 10 ? $index + 1 : 1; // Reset ke '01' setelah '10'

        return [
            'nomor_rt' => $nomor_rt, // Return nomor RT
        ];
    }
}
