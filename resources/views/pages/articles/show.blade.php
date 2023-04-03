@extends('layout.master')

@section('title', 'Тредиум | Статьи')

@section('content')
  <main class="container mb-4 pb-4">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <h2 class="mb-4">{{ $article->title }}</h2>

        <div class="mb-4">
          <button type="button" style="background: transparent; border: none">
            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 471.701 471.701" xml:space="preserve">
              <path d="M433.601 67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7 13.6-92.4 38.3l-12.9 12.9-13.1-13.1c-24.7-24.7-57.6-38.4-92.5-38.4-34.8 0-67.6 13.6-92.2 38.2-24.7 24.7-38.3 57.5-38.2 92.4 0 34.9 13.7 67.6 38.4 92.3l187.8 187.8c2.6 2.6 6.1 4 9.5 4 3.4 0 6.9-1.3 9.5-3.9l188.2-187.5c24.7-24.7 38.3-57.5 38.3-92.4.1-34.9-13.4-67.7-38.1-92.4zm-19.2 165.7-178.7 178-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3s10.7-53.7 30.3-73.2c19.5-19.5 45.5-30.3 73.1-30.3 27.7 0 53.8 10.8 73.4 30.4l22.6 22.6c5.3 5.3 13.8 5.3 19.1 0l22.4-22.4c19.6-19.6 45.7-30.4 73.3-30.4 27.6 0 53.6 10.8 73.2 30.3 19.6 19.6 30.3 45.6 30.3 73.3.1 27.7-10.7 53.7-30.3 73.3z" />
            </svg>
          </button>
          <span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 12c0-2.25 3.75-7.5 10.5-7.5S22.5 9.75 22.5 12s-3.75 7.5-10.5 7.5S1.5 14.25 1.5 12zM12 16.75a4.75 4.75 0 1 0 0-9.5 4.75 4.75 0 0 0 0 9.5zM14.7 12a2.7 2.7 0 1 1-5.4 0 2.7 2.7 0 0 1 5.4 0z" fill="#000" />
            </svg>
            {{ $article->views }}
          </span>
        </div>

        <div class="mb-2" style="display: flex; flex-wrap: wrap; flex-wrap: wrap; gap: 8px;">
          @foreach ($article->tags as $tag)
            <span class="btn btn-primary btn-sm">{{ $tag->title }}</span>
          @endforeach
        </div>

        <p class="mb-4">{{ $article->description }}</p>

        @if (count($article->comments) > 0)
          <hr>
          <ul style="display: flex; flex-direction: column-reverse;">
            @foreach ($article->comments as $comment)
              <li>
                <b>{{ $comment->title }}</b>
                <p>{{ $comment->message }}</p>
              </li>
            @endforeach
          </ul>
        @endif

        <hr>
        <h4>Оставить комментарий</h4>

        <form action="{{ route('comments.store') }}" method="post">
          @csrf
          <input type="hidden" name="article_id" value="{{ $article->id }}">
          <div class="mb-3">
            <label class="form-label" for="title">Тема сообщения</label>
            <input class="form-control" name="title" type="text" id="title" required>
          </div>
          <div class="mb-3">
            <label class="form-label" for="message">Сообщения</label>
            <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
          </div>
          <button class="btn btn-primary" type="submit">Оставить комментарий</button>
        </form>
      </div>
      <div class="col-2"></div>
    </div>
  </main>
@endsection
