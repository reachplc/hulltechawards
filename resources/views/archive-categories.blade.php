@extends('layouts.app')

@section('content')
  <div class="page-header">
    <h1>Categories</h1>
  </div>


  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="category-grid">

    @while (have_posts()) @php the_post() @endphp
    <div class="category">
      <h3>{{the_title()}}</h3>
      <a href="{{the_permalink()}}" class="btn modal-link">About this award</a>
    </div>
    @endwhile
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
