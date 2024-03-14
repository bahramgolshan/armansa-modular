{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</li>
		<li>
			{{ Form::label('file_name', 'File_name:') }}
			{{ Form::text('file_name') }}
		</li>
		<li>
			{{ Form::label('extension', 'Extension:') }}
			{{ Form::text('extension') }}
		</li>
		<li>
			{{ Form::label('type', 'Type:') }}
			{{ Form::text('type') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}