@extends('layouts.app')
	@section('content')
		<div class="jumbotron text-center">
			<div class="container">
				<h1>{{$title}}</h1>
					<p class="lead">Here we go... welcome to our page</p>
						<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-lg btn-success" href="/register" role="button">Register</a></p>
			</div>
		</div>
	@endsection


