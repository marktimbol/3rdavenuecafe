@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>{{ $menu->name }}</h1>
				<h2>{{ $menu->price }}</h2>
				<p>{{ $menu->description }}</p>
			</div>
		</div>
	</div>
@endsection