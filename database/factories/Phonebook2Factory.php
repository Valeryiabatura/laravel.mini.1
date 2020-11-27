<?php

namespace Database\Factories;

use App\Models\Phonebook2;
use Illuminate\Database\Eloquent\Factories\Factory;

class Phonebook2Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phonebook2::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email,
            'phone' => $this->faker->e164PhoneNumber,
            'city' =>$this->faker->city,
            'created_at' => $this->faker->dateTime,
            'created_at' => $this->faker->dateTime,
        ];
    }
}
