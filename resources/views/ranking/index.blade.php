@extends("layouts.app")

@section('title')
	{{ trans("ranking.title") }}
@endsection

@section("content")
	<div class="container mb-5">
		<h2>> {{ trans("ranking.description") }}</h2>

		<ul class="nav nav-tabs" id="gameTab" role="tablist">
		@foreach( $games as $gameKey => $game)
			<li class="nav-item">
				<a class="nav-link @if ($gameKey === 0) active @endif"
				   id="{{ $game }}-tab"
				   data-toggle="tab"
				   href="#{{ $game }}"
				   role="tab"
				   aria-controls="{{ $game }}"
				   aria-selected="@if ($gameKey === 0) true @else false @endif"
				>
					{{ $game }}
				</a>
			</li>
		@endforeach
		</ul>

		<div class="tab-content" id="gameTabContent">
		@foreach( $games as $gameKey => $game)
			<div class="tab-pane fade @if($gameKey === 0) show active @endif"
			     id="{{ $game }}"
			     role="tabpanel"
			     aria-labelledby="{{ $game }}-tab"
			>
				<ul class="nav nav-tabs" id="typeTab" role="tablist">
				@foreach($types as $typeKey => $type)
					<li class="nav-item">
						<a class="nav-link @if( $typeKey === 0 && $gameKey === 0) active @endif"
						   id="{{ $game }}-{{ $type }}-tab"
						   data-toggle="tab"
						   href="#{{ $game }}-{{ $type }}"
						   role="tab"
						   aria-controls="{{ $game }}-{{ $type }}"
						   aria-selected="@if ($gameKey === 0 && $typeKey === 0) true @else false @endif"
						>
							{{ ucfirst($type) }}
						</a>
					</li>
				@endforeach
				</ul>

				<div class="tab-content" id="typeTabContent">
				@foreach($types as $typeKey => $type)
					<div class="tab-pane fade @if($typeKey === 0) show active @endif"
					     id="{{ $game }}-{{ $type }}"
					     role="tabpanel"
					     aria-labelledby="{{ $game }}-{{ $type }}-tab"
					>
						<ul class="nav nav-tabs" id="rankingTab" role="tablist">
						@foreach($rankings as $rankingKey => $ranking)
							@if ($ranking->game === $game && $ranking->type === $type)
								<li class="nav-item">
									<a class="navrank-link @if($gameKey === 0 && $typeKey === 0) active @endif"
									   id="{{ $game }}-{{ $type }}-{{ $ranking->name }}-tab"
									   data-toggle="tab"
									   href="#{{ $game }}-{{ $type }}-{{ $ranking->name }}"
									   role="tab"
									   aria-controls="{{ $game }}-{{ $type }}-{{ $ranking->name }}"
									   aria-selected="@if($gameKey === 0 && $typeKey === 0 && $rankingKey === 0) true @else false @endif"
									>
										{{ $ranking->displayName }}
									</a>
								</li>
							@endif
						@endforeach
						</ul>

						<div class="tab-content mb-5" id="rankingTabContent">
							@foreach($rankings as $rankingKey => $ranking)
								@if ($ranking->game === $game && $ranking->type === $type)
								<div class="tab-pane fade @if($isFirst) show active @endif"
								     id="{{ $game }}-{{ $type }}-{{ $ranking->name }}"
								     role="tabpanel"
								     aria-labelledby="{{ $game }}-{{ $type }}-{{ $ranking->name }}-tab"
								>
								@php $isFirst = false; @endphp
									<a href="{{ asset($ranking->img) }}"
									   data-lightbox="image-1"
									   data-title="{{ $ranking->name }}"
									>
										<img src="{{ $ranking->img169 ? asset($ranking->img169) : asset($ranking->img) }}"
										     class="powerrankings data-lightbox"
										>
									</a>
								</div>
								@endif
							@endforeach
							@php $isFirst = true; @endphp
						</div>
					</div>
				@endforeach
				</div>
			</div>
		@endforeach
		</div>
	</div>
@endsection