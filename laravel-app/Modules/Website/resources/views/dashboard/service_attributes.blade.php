{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('service_id', 'Service_id:') }}
			{{ Form::text('service_id') }}
		</li>
		<li>
			{{ Form::label('attribute_id', 'Attribute_id:') }}
			{{ Form::text('attribute_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}