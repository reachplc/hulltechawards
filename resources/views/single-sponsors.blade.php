@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <article @php post_class() @endphp>
      <div class="entry-content">
        @php the_content() @endphp
      </div>
    </article>

  @endwhile
@endsection
