@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="container has-padding-top-50">
    <div class="content" data-scroll data-scroll-speed="1" data-aos>
      @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-page', 'partials.content'])
      @endwhile
    </div>
  </div>
@endsection
