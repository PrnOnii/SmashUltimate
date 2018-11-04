@extends("layouts.app")

@section('title')
	Contacts
@endsection
@section("content")
<div class="container">
	<div class="row">
		<div class="col-6">
			<h3>Où nous trouver?</h3>
			<ul>
				<li>
					<a href="https://discord.gg/uqmpRnX">
						<i class="fab fa-discord"></i> Discord
					</a>
				</li>
				<li>
					<a href="https://twitter.com/smash4FR">
						<i class="fab fa-twitter"></i> Twitter
					</a>
				</li>
				<li>
					<a href="http://fb.com">
						<i class="fab fa-facebook-square"></i> Facebook
					</a>
				</li>
			</ul>
		</div>
		<div class="col-6">
			<h3>Autre info? La flemme</h3>
		</div>
	</div>
</div>
@endsection