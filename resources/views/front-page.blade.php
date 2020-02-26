@extends('layouts.app')

@section('hero')
  <div class="hero" id="particlelayer" style="background-image: url('@asset('images/hero.jpg')');">
    <div class="hero__body">
      {{-- <img id='loadlogo' src="@asset('images/logo.png')" /> --}}
      {{-- <h2>The Humber Region's principal Tech Awards</h2> --}}
    </div>
    <div id="scroll" class="instruct">
      <div class="arrow">

      </div>
      <div class="text">
        Scroll to Enter
      </div>
    </div>
  </div>
@endsection

@section('content')
  @while(have_posts()) @php the_post() @endphp
      @php
        $dates = get_field('dates', 'option');
        $home = get_field('homepage', 'option');
      @endphp
    <h1>{{$home['heading']}}</h1>
    <h2>{{$dates['event']}} / {{$home['venue']}}</h2>
    <div class="intro">
      {!!wp_get_attachment_image( $home['partnership_logo'], 'full')!!}
      <p>{{$home['intro_text']}}</p>
    </div>
  @endwhile
@endsection
@section('particle')
  <div>
    <script src="@asset('scripts/particle.js')"></script>
  </div>
@endsection