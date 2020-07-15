
@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
      @php
        $dates = get_field('dates', 'option');
        $home = get_field('homepage', 'option');
      @endphp

    <h1>{{$home['heading']}}</h1>
    <h2>{{$dates['event']}} | {{$home['venue']}}</h2>


    <div class="partnership-logo">
      <a href="<?php echo $home['partnership_url_1']; ?>" target="_blank">
        {!!wp_get_attachment_image( $home['partnership_logo'], 'full')!!}
      </a>

      <p>{{$home['intro_text']}}</p>
     </div>
        
  @endwhile
@endsection
