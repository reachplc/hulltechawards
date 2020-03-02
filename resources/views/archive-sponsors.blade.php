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

  <p>Sponsoring the Awards will align your brand with the key achievements in the tech industry together the Humber’s most dynamic tech companies and key personnel. </p>
  <p>It delivers the perfect platform to promote your brand as a true market leader and position yourself above your competition. </p>
  <p>The package enables you to associate your business with the event whilst also giving you the opportunity to market your key messages through digital media across the region and/or nationally throughout the Reach network.</p>
  <p>It provides a unique networking opportunity allowing you to make new connections, secure leads and build on existing relationships.</p>

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

  <a  target="_blank" href="@asset('../mediapack.pdf')" class="btn">Download Sponsorship Pack</a>

  {!! get_the_posts_navigation() !!}
@endsection
