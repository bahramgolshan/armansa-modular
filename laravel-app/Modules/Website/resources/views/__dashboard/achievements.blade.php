{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('prefix', 'Prefix:') }}
			{{ Form::text('prefix') }}
		</li>
		<li>
			{{ Form::label('number', 'Number:') }}
			{{ Form::text('number') }}
		</li>
		<li>
			{{ Form::label('suffix', 'Suffix:') }}
			{{ Form::text('suffix') }}
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