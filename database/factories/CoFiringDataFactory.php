<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CoFiringData>
 */
class CoFiringDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'admin_id' => $this->faker->numberBetween(1,21),
            'biomass' => $this->faker->randomNumber(2),
            'batubara' => $this->faker->randomNumber(2),
            'nk_biomass' => $this->faker->randomNumber(2),
            'nk_batubara' => $this->faker->randomNumber(2),
            'mwh_brown' => $this->faker->randomNumber(2),
            'mwh_green' => $this->faker->randomNumber(2),
            'mwh_total' => $this->faker->randomNumber(2),
            'sh_bm' => $this->faker->randomNumber(2),
            'co2_eq_avoid' => $this->faker->randomNumber(2),
            'date_input' => $this->faker->date('Y-m-d', 'now'),
        ];
    }
}
