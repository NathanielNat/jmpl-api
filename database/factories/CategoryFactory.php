<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'slug' => $this->faker->slug,
            'pic' => 'https://picsum.photos/200',
            'details' =>  $this->faker->paragraphs($nbSentences = 3, $variableNbSentences = true),
            'position' => $this->faker->numberBetween(0,7),
            // 'parent' => $this->faker->numberBetween(0,7),
        ];

       
    }
}
