<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\MarketingCampaign;

class MarketingCampaignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MarketingCampaign::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'target_audience' => $this->faker->randomElement(["all","segment_a","segment_b"]),
            'status' => $this->faker->randomElement(["planned","running","completed","canceled"]),
            'budget' => $this->faker->randomFloat(2, 0, 9999999999999.99),
        ];
    }
}
