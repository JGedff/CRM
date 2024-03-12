<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SaleProposal>
 */
class SaleProposalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'state' => $this->faker->text(),
            'quantity_sold' => $this->faker->numberBetween(0, 50),
            'total_price' => $this->faker->numberBetween(0, 50),
        ];
    }
}
