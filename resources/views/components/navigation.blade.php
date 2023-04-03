<nav class="navbar navbar-light">
  <div class="container">
    <a class="navbar-brand">Тредиум</a>

    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a
          class="nav-link {{ $route == 'index' ? 'disabled' : '' }}"
          href="{{ route('index') }}"
        >
          На главную
        </a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link {{ $route == 'articles' || $route == 'articles.show' ? 'disabled' : '' }}"
          href="{{ route('articles') }}"
          >
          Каталог статей
        </a>
      </li>
    </ul>
  </div>
</nav>
