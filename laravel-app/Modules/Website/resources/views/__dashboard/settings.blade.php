{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('key', 'Key:') }}
			{{ Form::text('key') }}
		</li>
		<li>
			{{ Form::label('value', 'Value:') }}
			{{ Form::text('value') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::text('description') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}