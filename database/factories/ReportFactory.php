<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Report;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Report::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'generated_by' => $this->faker->word(),
            'report_type' => $this->faker->randomElement(["sales","customer_activity","performance"]),
            'parameters' => '{}',
            'generated_at' => $this->faker->dateTime(),
        ];
    }
}
