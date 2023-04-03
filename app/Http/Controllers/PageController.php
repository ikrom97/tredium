<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    $articles = Article::latest()->take(6)->get();

    return view('pages.index', compact('articles'));
  }

  public function articles(Request $request)
  {
    if ($request->tag) {
      $tag = $request->tag;
      $articles = Article::latest()->whereHas('tags', function ($query) use ($tag) {
        $query->where('slug', $tag);
      })->paginate(10);
    } else {
      $articles = Article::latest()->paginate(10);
    }
    $tags = Tag::orderBy('title')->get();

    return view('pages.articles.index', compact('articles', 'tags'));
  }

  public function articlesShow($slug)
  {
    $article = Article::where('slug', $slug)->first();
    $article->views++;
    $article->update();

    return view('pages.articles.show', compact('article'));
  }
}
