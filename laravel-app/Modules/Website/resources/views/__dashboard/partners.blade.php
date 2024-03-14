{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</li>
		<li>
			{{ Form::label('media_id', 'Media_id:') }}
			{{ Form::text('media_id') }}
		</li>
		<li>
			{{ Form::label('is_featured', 'Is_featured:') }}
			{{ Form::text('is_featured') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}