<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstNameMale,
            'slug' => $this->faker->slug,
            'pic' => 'https://picsum.photos/200',
            'brand' => $this->faker->company,
            'category_id' => $this->faker->numberBetween(1,7),
            'description' =>  $this->faker->paragraphs($nbSentences = 3, $variableNbSentences = true),
            'specifications' =>  $this->faker->paragraphs($nbSentences = 3, $variableNbSentences = true),
            'compactible_models' =>  $this->faker->paragraphs($nbSentences = 3, $variableNbSentences = true),
        ];

    }
}
