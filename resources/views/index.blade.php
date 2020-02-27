@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="news-grid">
    @while (have_posts()) @php the_post() @endphp
      <a class="news" href="{{get_field('url')}}" target="_blank">
          <div class="image">
            {{the_post_thumbnail()}}
          </div>
          <div class="inner-content">
            <h2 class="entry-title">{!! get_the_title() !!}</h2>
            <h3>{!! get_field('subheading') !!}</h3>
          </div>
      </a>
    @endwhile
  </div>
@endsection
