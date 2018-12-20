@extends("layouts.app")

@section('title')
	{{ trans("worldmap.title") }}
@endsection

@section("content")
<div class="row mb-5">
	<div class="col-12">
		<h1>{{ trans("worldmap.header") }}</h1>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.google.com/maps/d/u/0/embed?mid=14dl_jCmSa_gEeqXtk-mS2548zRG89Y1W"></iframe>
		</div>
	</div>
</div>
@endsection