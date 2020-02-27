@extends('layouts.app')

@section('content')
  <div class="page-header">
    <h1>Our Judges</h1>
  </div>

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="judges-grid">

    @while (have_posts()) @php the_post() @endphp
      <div @php post_class() @endphp>
        {{the_post_thumbnail()}}
        <h2 class="entry-title">{!! get_the_title() !!}</h2>
        @php the_content() @endphp
      </div>
    @endwhile
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
