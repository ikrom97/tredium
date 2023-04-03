<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  public function store(Request $request)
  {
    try {
      Comment::create([
        'title' => $request->title,
        'message' => $request->message,
        'article_id' => $request->article_id,
      ]);

      return back();
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
