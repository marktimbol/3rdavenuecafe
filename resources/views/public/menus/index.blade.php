@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="list-group">
					@foreach( $menus as $menu )
						<li class="list-group-item">
							{{ $menu->name }}, AED {{ $menu->price }}
							<p>{{ $menu->description }}</p>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection