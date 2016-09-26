@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>{{ $category->name }}</h1>
				<ul class="list-group">
					@foreach( $category->menus as $menu )
						<li class="list-group-item">
							<a href="{{ route('menus.show', $menu->id) }}">
								{{ $menu->name }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection