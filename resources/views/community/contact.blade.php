@extends("layouts.app")

@section('title')
	{{ trans("contact.title") }}
@endsection

@section("content")
	<div class="row mb-5">
		<div class="col-12">
			<h1>{{ trans("contact.header") }}</h1>
			<table id="contactTable" class="display">
				<thead>
					<tr>
						<th>{{ trans("contact.thead.region") }}</th>
						<th><i class="fab fa-twitter"></i> {{ trans("contact.thead.twitter") }}</th>
						<th><i class="fab fa-discord"></i> {{ trans("contact.thead.discord") }}</th>
						<th><i class="fab fa-facebook-square"></i> {{ trans("contact.thead.facebook") }}</th>
						<th>{{ trans("contact.thead.other") }}</th>
					</tr>
				</thead>
				<tbody>
					@foreach($communities as $community)
						<tr>
							<th>{{ $community["name"] }}</th>
							<td>
							@if($community["twitter"])
								<a href="{{ $community["twitter"]["url"] }}" target="_blank">{{ $community["twitter"]["name"] }}</a>
							@else
								&mdash;
							@endif
							</td>

							<td>
							@if($community["discord"])
								<a href="{{ $community["discord"]["url"] }}" target="_blank">{{ $community["discord"]["name"] }}</a>
							@else
								&mdash;
							@endif
							</td>

							<td>
							@if($community["facebook"])
								<a href="{{ $community["facebook"]["url"] }}" target="_blank">{{ $community["facebook"]["name"] }}</a>
							@else
								&mdash;
							@endif
							</td>

							<td>
							@if($community["other"])
								<a href="{{ $community["other"]["url"] }}" target="_blank"><i class="{{ $community["other"]["type"] }}"></i> {{ $community["other"]["name"] }}</a>
							@else
								&mdash;
							@endif
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection

@section("scripts")
<script>
	$(document).ready( function () {
		$('#contactTable').DataTable( {
			"pageLength": 25,
			columnDefs: [
				{
					targets: -1,
					className: 'dt-head-center'
				}
			]
	} );
	} );
</script>
@endsection