<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\Contact;
use App\Models\Customer;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => ::factory(),
            'customer_id' => Customer::factory(),
            'type' => $this->faker->randomElement(["email","phone","meeting","message"]),
            'contact_date' => $this->faker->dateTime(),
            'notes' => $this->faker->text(),
        ];
    }
}
