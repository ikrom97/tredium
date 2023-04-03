@extends('layout.master')

@section('title', 'Тредиум | Главная')

@section('content')
  <main>
    <div class="py-4 bg-light">
      <p class="container my-4">
        <span class="h1">Успех</span> <br> для молодых и успешных
      </p>
    </div>

    <div class="container">

      <div class="row row-cols-3 g-4 py-4">
        @foreach ($articles as $article)
          <div class="col">
            <x-card :article="$article" />
          </div>
        @endforeach
      </div>
    </div>
  </main>
@endsection
