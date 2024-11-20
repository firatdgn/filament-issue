<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Event;
use App\Models\User;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'event_date' => $this->faker->dateTime(),
            'customer_id' => Customer::factory(),
            'user_id' => User::factory(),
            'status' => $this->faker->randomElement(["scheduled","completed","canceled"]),
            'location' => $this->faker->regexify('[A-Za-z0-9]{255}'),
        ];
    }
}
