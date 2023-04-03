<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $tags = Tag::factory()->count(9)->create();

    foreach ($tags as $tag) {
      $tag->articles()->attach(rand(1, 100));
    }
  }
}
