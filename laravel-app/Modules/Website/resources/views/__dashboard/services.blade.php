{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</li>
		<li>
			{{ Form::label('code', 'Code:') }}
			{{ Form::text('code') }}
		</li>
		<li>
			{{ Form::label('service_category_id', 'Service_category_id:') }}
			{{ Form::text('service_category_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}