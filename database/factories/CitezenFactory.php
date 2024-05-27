<?php

namespace Database\Factories;

use App\Models\Citezen;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitezenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citezen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 99),
            'sex' => $this->faker->randomElement(['male', 'female', 'other']),
            'description' => $this->faker->sentence,
        ];
    }
}
