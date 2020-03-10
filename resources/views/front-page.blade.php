@extends('layouts.app')

@section('hero')
  <div class="hero" id="particlelayer" style="background-image: url('@asset('images/hero.jpg')');">
    <div class="hero__body">
      {{-- <img id='loadlogo' src="@asset('images/logo.png')" /> --}}
      {{-- <h2>The region's leading tech awards</h2> --}}
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
    <h2>{{$dates['event']}} | {{$home['venue']}}</h2>
    <div class="intro">
      <p>{{$home['intro_text']}}</p>
     <div class="partnership-logo">
      <a href="<?php echo $home['partnership_url_1']; ?>" target="_blank">
        {!!wp_get_attachment_image( $home['partnership_logo'], 'full')!!}
      </a>
      <h3 class="partnership-heading">Strategic Partner</h3>
      <a href="<?php echo $home['partnership_url_2']; ?>" target="_blank">
        {!!wp_get_attachment_image( $home['partnership_logo_2'], 'full')!!}
      </a>
     </div>

    </div>
  @endwhile
@endsection
@section('particle')
  <div>
    <script src="@asset('scripts/particle.js')"></script>
  </div>
@endsection