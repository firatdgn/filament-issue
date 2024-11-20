<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Lead;
use App\Models\User;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'source' => $this->faker->randomElement(["website","email","phone","social_media"]),
            'status' => $this->faker->randomElement(["new","contacted","qualified","closed","won","lost"]),
            'user_id' => User::factory(),
        ];
    }
}
