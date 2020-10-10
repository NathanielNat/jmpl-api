<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'slug' => $this->faker->slug,
            'tag' => implode(",",$this->faker->words($nb=3, $asText = false)),
            'content' => $this->faker->paragraphs($nbSentences = 5, $variableNbSentences = true),
            'pic' => 'https://picsum.photos/200',
            'visibility' => $this->faker->randomElement(['Public','Private']),
            'publish' => \Carbon\Carbon::now(),
            'featured' => $this->faker->randomElement(['Yes','No']),
            'position' => $this->faker->numberBetween(0,50),
        ];

        // 'title', 'slug','content','pic','tag','visibility','publish','featured','position'
    }
}
