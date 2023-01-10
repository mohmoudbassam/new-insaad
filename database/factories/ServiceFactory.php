<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data = [];

        foreach (config('app.languages') as $key => $lang) {
            $data [$key] = [
                'title'       => $this->faker->name,
                'description' => $this->faker->text,
            ];
        }

        return $data;

    }

    public function configure()
    {
        return $this->afterCreating(function (Service $service) {
            Image::factory()->create([
                'image'          => 'assets/website/images/service8.png',
                'imageable_type' => Service::class,
                'imageable_id'   => $service->id,
            ]);
        });
    }
}

