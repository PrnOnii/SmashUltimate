@extends("layouts.app")

@section('title')
	Ranking
@endsection

@section("content")
	<div class="row">
		<div class="col-12">
			<img src="{{ asset("img/construction.png") }}" class="mx-auto d-block mt-5" alt="Under Construction">
			<h3 class="text-center">{{ trans("home.construction") }}</h3>
		</div>
	</div>
@endsection