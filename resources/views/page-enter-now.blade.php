@extends('layouts.app')

@section('content')

  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    <script type="text/javascript" src="https://form.jotform.com/jsform/201694030677355"></script>  
  @endwhile
@endsection
