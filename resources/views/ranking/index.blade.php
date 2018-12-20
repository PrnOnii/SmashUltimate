@extends("layouts.app")

@section('title')
	{{ trans("ranking.title") }}
@endsection

@section("content")
	<div class="container">
		<h2>> {{ trans("ranking.description") }}</h2>
		<h5>• {{ trans("ranking.wiiU") }}</h5>

		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="navrank-link active"
				   id="december2018-tab"
				   data-toggle="tab"
				   href="#december2018"
				   role="tab"
				   aria-controls="december2018"
				   aria-selected="true"
				>
					{{ trans("ranking.months.december") }} 2018
				</a>
			</li>
			<li class="nav-item">
				<a class="navrank-link"
				   id="may2018-tab"
				   data-toggle="tab"
				   href="#may2018"
				   role="tab"
				   aria-controls="may2018"
				   aria-selected="true"
				>
					{{ trans("ranking.months.may") }} 2018
				</a>
			</li>
			<li class="nav-item">
				<a class="navrank-link"
				   id="january2018-tab"
				   data-toggle="tab"
				   href="#january2018"
				   role="tab"
				   aria-controls="january2018"
				   aria-selected="false"
				>
					{{ trans("ranking.months.january") }} 2018
				</a>
			</li>
			<li class="nav-item">
				<a class="navrank-link"
				   id="june2017-tab"
				   data-toggle="tab"
				   href="#june2017"
				   role="tab"
				   aria-controls="june2017"
				   aria-selected="false"
				>
					{{ trans("ranking.months.june") }} 2017
				</a>
			</li>
			<li class="nav-item">
				<a class="navrank-link"
				   id="january2017-tab"
				   data-toggle="tab"
				   href="#january2017"
				   role="tab"
				   aria-controls="january2017"
				   aria-selected="false"
				>
					{{ trans("ranking.months.january") }} 2017
				</a>
			</li>
			<li class="nav-item">
				<a class="navrank-link"
				   id="september2016-tab"
				   data-toggle="tab"
				   href="#september2016"
				   role="tab"
				   aria-controls="september2016"
				   aria-selected="false"
				>
					{{ trans("ranking.months.september") }} 2016
				</a>
			</li>
			<li class="nav-item">
				<a class="navrank-link"
				   id="april2016-tab"
				   data-toggle="tab"
				   href="#april2016"
				   role="tab"
				   aria-controls="april2016"
				   aria-selected="false"
				>
					{{ trans("ranking.months.april") }} 2016
				</a>
			</li>
			<li class="nav-item">
				<a class="navrank-link"
				   id="september2015-tab"
				   data-toggle="tab"
				   href="#september2015"
				   role="tab"
				   aria-controls="september2015"
				   aria-selected="false"
				>
					{{ trans("ranking.months.september") }} 2015
				</a>
			</li>
		</ul>


		<div class="tab-content mb-5" id="myTabContent">

			<div class="tab-pane fade show active" id="december2018" role="tabpanel" aria-labelledby="december2018-tab">
				<a href="{{ asset("img/rankings/2018decembre.jpg") }}" data-lightbox="image-1" data-title="december 2018">
					<img class="powerrankings data-lightbox" src="{{ asset("img/rankings/2018decembre.jpg") }}">
				</a>
			</div>

			<div class="tab-pane fade show" id="may2018" role="tabpanel" aria-labelledby="may2018-tab">
				<a href="{{ asset("img/rankings/2018mai.jpg") }}" data-lightbox="image-1" data-title="may 2018">
					<img class="powerrankings data-lightbox" src="{{ asset("img/rankings/2018mai169.jpg") }}">
				</a>
			</div>

			<div class="tab-pane fade" id="january2018" role="tabpanel" aria-labelledby="january2018-tab">
				<a href="{{ asset("img/rankings/2018janvier.jpg") }}" data-lightbox="image-1" data-title="january 2018">
					<img class="powerrankings data-lightbox" src="{{ asset("img/rankings/2018janvier169.jpg") }}">
				</a>
			</div>

			<div class="tab-pane fade" id="june2017" role="tabpanel" aria-labelledby="june2017-tab">
				<a href="{{ asset("img/rankings/2017juin.jpg") }}" data-lightbox="image-1" data-title="june 2017">
					<img class="powerrankings data-lightbox" src="{{ asset("img/rankings/2017juin.jpg") }}">
				</a>
			</div>

			<div class="tab-pane fade" id="january2017" role="tabpanel" aria-labelledby="january2017-tab">
				<a href="{{ asset("img/rankings/2017janvier.jpg") }}" data-lightbox="image-1" data-title="january 2017">
					<img class="powerrankings data-lightbox" src="{{ asset("img/rankings/2017janvier.jpg") }}">
				</a>
			</div>

			<div class="tab-pane fade" id="september2016" role="tabpanel" aria-labelledby="september2016-tab">
				<a href="{{ asset("img/rankings/2016septembre.jpg") }}" data-lightbox="image-1" data-title="september 2016">
					<img class="powerrankings data-lightbox" src="{{ asset("img/rankings/2016septembre.jpg") }}">
				</a>
			</div>

			<div class="tab-pane fade" id="april2016" role="tabpanel" aria-labelledby="april2016-tab">
				<a href="{{ asset("img/rankings/2016avril.jpg") }}" data-lightbox="image-1" data-title="april 2016">
					<img class="powerrankings data-lightbox" src="{{ asset("img/rankings/2016avril169.jpg") }}">
				</a>
			</div>

			<div class="tab-pane fade" id="september2015" role="tabpanel" aria-labelledby="september2015-tab">
				<a href="{{ asset("img/rankings/2015sept.jpg") }}" data-lightbox="image-1" data-title="september 2015">
					<img class="powerrankings data-lightbox" src="{{ asset("img/rankings/2015sept169.jpg") }}">
				</a>
			</div>
		</div>

	</div>
@endsection