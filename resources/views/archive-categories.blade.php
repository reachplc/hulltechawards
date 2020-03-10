@extends('layouts.app')

@section('content')
  <div class="page-header">
    <h1>Categories</h1>
  </div>

  <div style="text-align: center;">
  <p>
    We have 14 awards up for grabs this year, including some new categories for 2020 along with the return of a few favourites.  The awards are free to enter, there is no limit to the number of entries you can make, nominees can enter themselves, their employer or any other individual that is worthy of being crowned a winner.</p>

    <p>All you have to do is complete the entry form and simply tell us in no more than 500 words why they deserve to win.</p>
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
