@extends('layouts.app')

@section('content')
  <div class="page-header">
    <h1>Our Sponsors</h1>
  </div>


  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="sponsor-grid">
    <div class="archive-sponsor-grid">
      @php
        $args = array(
          'post_type'=> 'sponsors',
          'post_status' => 'publish',
          'posts_per_page' => -1
          );
        $sponsor_query = new WP_Query( $args );
      @endphp

      @if($sponsor_query->have_posts())
        @while($sponsor_query->have_posts()) @php $sponsor_query->the_post(); @endphp
          @php
            $link = get_the_permalink();
          @endphp
          <a class="sponsor modal-link" href="{{$link}}">
            {{the_post_thumbnail()}}
            <h4>{{the_title()}}</h4>
          </a>
        @endwhile
      @endif
    </div>
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
