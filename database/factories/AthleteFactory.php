<?php

namespace Database\Factories;

use App\Models\Athlete;
use Illuminate\Database\Eloquent\Factories\Factory;

class AthleteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Athlete::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'date_of_birthday' => $this->faker->dateTimeBetween('-40 years', '-15 years'),
            'country_id' => rand(1, 239),
            'sport_id' => rand(1, 67),
            'registered_at' => $this->faker->dateTimeBetween('-12 months', '-6 months'),
        ];
    }
}
