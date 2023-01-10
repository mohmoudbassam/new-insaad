<?php

namespace Database\Factories;

use App\Models\AboutUs;
use App\Models\Policies;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutUsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AboutUs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data=[];
        foreach (config('app.languages') as $key => $lang) {
            $data [$key] = [
                'vision' => $this->faker->realText(1000),
                'mission' => $this->faker->realText(1000),
                'description_one' => $this->faker->realText(1000),
                'description_two' => $this->faker->realText(1000),
            ];
        }
        return $data;
    }
}
