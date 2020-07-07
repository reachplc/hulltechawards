@extends('layouts.app')

@section('hero')
  <div class="hero" id="particlelayer" style="background-image: url('@asset('images/hero-new.jpg')');">

    <div class="hero__body">
    <div class="logo" id="anim-logo">
      <!-- @php (include App\svg_path('images/logo.svg')) @endphp -->
    </div>
      <h2>The Region's Leading<br> Tech Awards Event</h2>
      <h3>In Partnership with:</h3>
        <div class="hero__sponsor">
          <img src="http://www.techawardshumber.com/wp-content/uploads/2020/03/gb-recuitment.png" alt="">
        </div>
      <div class="keydates-center">
      @php
        $variable = get_field('dates', 'option');
      @endphp

        <div class="date">
          <h4 class="white-date">{{ $variable['entries_open'] }}</h4>
          <h4 class="white-title">Entries Open</h4>
        </div>
        <div class="date middle">
          <h4 class="white-date">{{ $variable['entries_close'] }}</h4>
          <h4 class="white-title">Entries Close</h4>
        </div>
        <!-- <div class="date">
          <h4>{{ $variable['judging'] }}</h4>
          <h4>Judging</h4>
        </div> -->
        <div class="date">
          <h4 class="white-date">{{ $variable['event'] }}</h4>
          <h4 class="white-title">Tech Awards Event</h4>
        </div>
      </div>
     
    <div id="scroll" class="instruct">
      <a href="/intro" class="btn-white">
        Click to enter
      </a>
    </div>
  </div>
@endsection

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div />
  @endwhile
@endsection
@section('particle')
  <div>
    <script src="@asset('scripts/particle.js')"></script>
  </div>
@endsection