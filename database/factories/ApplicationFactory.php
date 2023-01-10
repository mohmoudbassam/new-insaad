<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'company_name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'online_store_url' => $this->faker->url,
            'online_store_platform' => $this->faker->name,
            'message' => $this->faker->text,
            'count_orders' => rand(10,100),
            'count_orders_ads' => rand(10,100),
        ];
    }
}
