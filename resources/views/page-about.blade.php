@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    <div class="techweek">
      <div class="logo">
        <img src="@asset('images/techweek.svg')" />
      </div>
      <div class="image">
        <img src="@asset('images/woman.png')" />
      </div>
    </div>
    <div class="keydates">
      @php
        $variable = get_field('dates', 'option');
      @endphp

      <h2>Key Dates</h2>
      <div class="dates">
        <div class="date">
          <h4>{{ $variable['entries_open'] }}</h4>
          <h4 class="black">Entries Open</h4>
        </div>
        <div class="date">
          <h4>{{ $variable['entries_close'] }}</h4>
          <h4 class="black">Entries Close</h4>
        </div>
        <div class="date">
          <h4>{{ $variable['judging'] }}</h4>
          <h4 class="black">Judging</h4>
        </div>
        <div class="date">
          <h4>{{ $variable['event'] }}</h4>
          <h4 class="black">Tech Awards Event</h4>
        </div>
      </div>
    </div>
  @endwhile
@endsection
