<?php

namespace Database\Factories;

use App\Models\Count;
use App\Models\AboutUs;
use App\Models\Policies;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Count::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data=[
            'count' => $this->faker->numberBetween(100,10000),
            'image' => 'assets/website/images/users.svg'
        ];
        foreach (config('app.languages') as $key => $lang) {
            $data [$key] = [
                'name' => $this->faker->realText(50),
            ];
        }
        return $data;
    }
}
