<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      "title" => $this->faker->name(),
      "image" => 'https://placehold.co/800x500',
      "image_thumb" => 'https://placehold.co/400x250',
      "description" => $this->faker->paragraph(30),
      "views" => $this->faker->randomNumber(5, false),
    ];
  }
}
