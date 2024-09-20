<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'job_title' => $this->faker->jobTitle,
            'joinning_date' => $this->faker->date,
            'salary' => $this->faker->randomFloat(2, 1000, 10000),
            'email' => $this->faker->unique()->safeEmail,
            'mobile_no' => $this->faker->unique()->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}
