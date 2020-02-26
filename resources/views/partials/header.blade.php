<header class="banner">
  <div class="container navbar">
    <a class="brand" href="{{ home_url('/') }}">
      @php (include App\svg_path('images/logo.svg')) @endphp
    </a>
    <div class="opennav">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
      </div>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
