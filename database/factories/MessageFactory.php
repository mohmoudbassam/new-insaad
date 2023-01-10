<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'    => $this->faker->name,
            'phone'   => $this->faker->phoneNumber,
            'email'   => $this->faker->email,
            'subject' => $this->faker->text(100),
            'message' => $this->faker->text(500),
            'read_at' => null,
        ];

    }
}
