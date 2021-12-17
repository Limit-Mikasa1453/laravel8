<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ModelPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,5)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(10,20)),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(20,30))) . '</p>',
            // maps collect
            // 'body' => collect($this->faker->paragraphs(mt_rand(20,30)))->map(function($p){ return "<p>$p</p>"; }),
            // erow funtion
            'body' => collect($this->faker->paragraphs(mt_rand(20,30)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,3)
        ];
    }
}
