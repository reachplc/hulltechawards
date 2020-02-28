@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    @if(have_rows('winners'))
      <div class="winners-grid">
        @while (have_rows('winners')) @php the_row(); @endphp
        <div class="winner">
          @php
            $image = get_sub_field('image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
          @endphp
            @php
              if( $image ) {
                echo wp_get_attachment_image( $image, $size );
              }
            @endphp
            <h5>{!! the_sub_field('category') !!}</h5>
            <h6>{!! the_sub_field('winner') !!}</h6>
          </div>
        @endwhile
      </div>
    @endif
  @endwhile
@endsection
