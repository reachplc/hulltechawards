@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    <p>If you have any questions or require any further information please contact {{ get_field('name') }} using the details below:</p>

    <div class="contact">
      <div class="card">
        {!!wp_get_attachment_image( get_field('image'), 'full')!!}
        <h2 class="entry-title">{{ get_field('name') }}</h2>
        <p>T: <a href="tel: {{ get_field('phone_number') }}">{{ get_field('phone_number') }}</a></p>
        <p>M: <a href="tel: {{ get_field('mobile_number') }}">{{ get_field('mobile_number') }}</a></p>
        <p>E: <a href="mailto: {{ get_field('email_address') }}">{{ get_field('email_address') }}</a></p>
      </div>
    </div>
  @endwhile
@endsection
