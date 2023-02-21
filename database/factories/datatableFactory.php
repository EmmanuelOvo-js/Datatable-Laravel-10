<?php

namespace Database\Factories;

use App\Models\datatable;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\datatable>
 */
class datatableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = datatable::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'body' => $this->faker->paragraph(rand(2, 10)),
            'date' => $this->faker->DateTime(),
        ];
    }

}
