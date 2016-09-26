@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="list-group">
					@foreach( $categories as $category )
						<li class="list-group-item">
							<a href="{{ route('categories.show', $category->id) }}">
								{{ $category->name }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection