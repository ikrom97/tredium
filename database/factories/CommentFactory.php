<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
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
      "message" => $this->faker->paragraph(3),
      "article_id" => $this->faker->randomNumber(2, false),
    ];
  }
}
