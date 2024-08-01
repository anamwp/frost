@extends('layouts.app')

@section('content')
  @include('partials.page-header')

	@if (! have_posts())
		<x-alert type="warning">
		{!! __('Sorry, no results were found.', 'sage') !!}
		</x-alert>
		<div class="search-box mt-5">
		{!! get_search_form(false) !!}
		</div>
	@endif

	<div class="grid grid-cols-1 gap-5">
	@while(have_posts()) @php(the_post())
		@include('partials.content-search')
	@endwhile
	</div>

  {!! get_the_posts_navigation() !!}
@endsection
