<?php

namespace Database\Factories;

use App\Models\Costumer;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Costumer>
 */
class CostumerFactory extends Factory
{
    protected $model = Costumer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['I', 'B']);
        $name = $type == 'I' ? $this->faker->name() : $this->faker->company();

        return [
            'name' => $name,
            'type' => $type,
            'email' => $this->faker->email(),
            'adress' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'postal_code' => $this->faker->postCode(),
        ];
    }
}
