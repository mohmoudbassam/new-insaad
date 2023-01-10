<?php

namespace Database\Factories;

use App\Models\Policies;
use Illuminate\Database\Eloquent\Factories\Factory;

class PoliciesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Policies::class;

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
                'privacy' => $this->faker->realText(5000),
                'usage' => $this->faker->realText(5000),
                'refund' => $this->faker->realText(5000),
                'agreement' => $this->faker->realText(5000),
            ];
        }
        return $data;
    }
}
