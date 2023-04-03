@extends('layout.master')

@section('title', 'Тредиум | Статьи')

@section('content')
  <main class="container">
    <div class="row">
      <div class="col-3">
        <div style="display: flex; flex-wrap: wrap; flex-wrap: wrap; gap: 8px;">
          @foreach ($tags as $tag)
            <a class="btn btn-primary btn-sm" href="?tag={{ $tag->slug }}" >{{ $tag->title }}</a>
          @endforeach
        </div>
      </div>

      <div class="col-9">
        @foreach ($articles as $article)
          <x-card class="mb-4" :article="$article" />
        @endforeach

        {{ $articles->links() }}
      </div>
    </div>

  </main>
@endsection
