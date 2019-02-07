@extends("layouts.app")

@section('title')
	{{ trans("about.page-title") }}
@endsection
@section("content")
<!-- Team Members -->
<h2>{{ trans("about.title") }}</h2>

<div class="row mb-5">
	<div class="col-lg-4 mb-4">
		<div class="card h-100 text-center">
			<img class="card-img-top" src="{{ asset("img/team/telu.jpg") }}" alt="Telu">
			<div class="card-body">
				<h4 class="card-title">Telu</h4>
				<h6 class="card-subtitle mb-2 text-muted">{{ trans("about.role.bastien") }}</h6>
				<p class="card-text">{{ trans("about.description.bastien") }}</p>
			</div>
			<div class="card-footer">
				<a href="https://twitter.com/teluoborg"><i class="fab fa-twitter"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 mb-4">
		<div class="card h-100 text-center">
			<img class="card-img-top" src="{{ asset("img/team/onii.jpg") }}" alt="Onii =D">
			<div class="card-body">
				<h4 class="card-title">Onii =D</h4>
				<h6 class="card-subtitle mb-2 text-muted">{{ trans("about.role.kevan") }}</h6>
				<p class="card-text">{{ trans("about.description.kevan") }}</p>
			</div>
			<div class="card-footer">
				<a href="https://twitter.com/PrnOnii"><i class="fab fa-twitter"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 mb-4">
		<div class="card h-100 text-center">
			<img class="card-img-top" src="{{ asset("img/team/volya.jpg") }}" alt="Volya">
			<div class="card-body">
				<h4 class="card-title">Volya</h4>
				<h6 class="card-subtitle mb-2 text-muted">{{ trans("about.role.jean") }}</h6>
				<p class="card-text">{{ trans("about.description.jean") }}</p>
			</div>
			<div class="card-footer">
				<a href="https://twitter.com/VolyaSSB"><i class="fab fa-twitter"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 mb-4">
		<div class="card h-100 text-center">
			<img class="card-img-top" src="{{ asset("img/team/nin.jpg") }}" alt="Nin'">
			<div class="card-body">
				<h4 class="card-title">Nin'</h4>
				<h6 class="card-subtitle mb-2 text-muted">{{ trans("about.role.remi") }}</h6>
				<p class="singe"><img src="{{ asset("img/team/singe.jpg") }}" alt="singe"></p>
			</div>
			<div class="card-footer">
				<a href="https://twitter.com/Nintenpro"><i class="fab fa-twitter"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 mb-4">
		<div class="card h-100 text-center">
			<img class="card-img-top" src="{{ asset("img/team/licia.jpg") }}" alt="Licia">
			<div class="card-body">
				<h4 class="card-title">Floink</h4>
				<h6 class="card-subtitle mb-2 text-muted">{{ trans("about.role.licia") }}</h6>
				<p class="card-text">
					{{ trans("about.description.licia") }}
				</p>
			</div>
			<div class="card-footer">
				<a href="https://twitter.com/GodsaveLicia"><i class="fab fa-twitter"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 mb-4">
		<div class="card h-100 text-center">
			<img class="card-img-top" src="{{ asset("img/team/sirk.jpg") }}" alt="SirKnight">
			<div class="card-body">
				<h4 class="card-title">Sirknight</h4>
				<h6 class="card-subtitle mb-2 text-muted">{{ trans("about.role.arnaud") }}</h6>
				<p class="card-text">{{ trans("about.description.arnaud") }}</p>
			</div>
			<div class="card-footer">
				<a href="https://twitter.com/HerowSirknight"><i class="fab fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div>
@endsection