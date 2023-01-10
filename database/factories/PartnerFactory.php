<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'link' => $this->faker->url,
            'type' => $this->faker->randomElement(Partner::ARR_TYPE),
            'image' => 'assets/website/images/DHL.png'
        ];
    }
}
