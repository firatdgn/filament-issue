<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Document;

class DocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Document::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'file_path' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'file_name' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'file_type' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'uploaded_by' => $this->faker->word(),
        ];
    }
}
