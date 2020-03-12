@extends('layouts.app')

@section('content')

<div class="archive-categories-data">


<div class="category-grid">

         <div class="category">
      <h3>Best In The Business</h3>
      <a href="http://www.techawardshumber.com/categories/best-in-the-business/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Most Impressive Growth</h3>
      <a href="http://www.techawardshumber.com/categories/most-impressive-growth/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Tech Entrepreneur</h3>
      <a href="http://www.techawardshumber.com/categories/tech-entrepreneur/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Tech Innovation</h3>
      <a href="http://www.techawardshumber.com/categories/tech-innovation/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Tech Business Woman Of The Year</h3>
      <a href="http://www.techawardshumber.com/categories/tech-business-woman-of-the-year/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Large Tech Team Of The Year</h3>
      <a href="http://www.techawardshumber.com/categories/large-tech-team-of-the-year/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Small Tech Team Of The Year</h3>
      <a href="http://www.techawardshumber.com/categories/small-tech-team-of-the-year/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Tech Leaders</h3>
      <a href="http://www.techawardshumber.com/categories/tech-leaders/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Best Web Or Mobile Application</h3>
      <a href="http://www.techawardshumber.com/categories/best-web-or-mobile-application/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Tech 4 Good Award</h3>
      <a href="http://www.techawardshumber.com/categories/tech-4-good-award/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Best Tech Place To Work</h3>
      <a href="http://www.techawardshumber.com/categories/best-tech-place-to-work/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Rising star under 30</h3>
      <a href="http://www.techawardshumber.com/categories/rising-star-under-30/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Tech Start-up of the Year</h3>
      <a href="http://www.techawardshumber.com/categories/tech-start-up-of-the-year/" class="btn modal-link">About this award</a>
    </div>
         <div class="category">
      <h3>Outstanding Tech Contribution</h3>
      <a href="http://www.techawardshumber.com/categories/outstanding-tech-contribution/" class="btn modal-link">About this award</a>
    </div>
      </div>

</div>

  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
