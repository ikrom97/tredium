<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $articles = Article::factory()->count(100)->create();

    foreach ($articles as $article) {
      $article->tags()->attach(rand(1,9));
    }
  }
}
