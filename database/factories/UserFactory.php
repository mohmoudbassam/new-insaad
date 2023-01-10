<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\City;
use App\Models\Country;
use App\Models\Service;
use App\Models\Specialty;
use App\Models\StudyLanguage;
use App\Models\University;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'        => $this->faker->name,
            'email'             => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'phone'             => 06253326154,
            'password'          => '$2y$12$fC3tXLnmFM6DF4y6l50nJuxE3s4ug9vANtUn2h8nmE8PQLOYdnSKS', // 123456
            'remember_token'    => Str::random(10),
            'role'              => User::ADMIN_ROLE
        ];
    }
}
