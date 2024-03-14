{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('service_sample_id', 'Service_sample_id:') }}
			{{ Form::text('service_sample_id') }}
		</li>
		<li>
			{{ Form::label('tag_id', 'Tag_id:') }}
			{{ Form::text('tag_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}