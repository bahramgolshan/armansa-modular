{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::textarea('description') }}
		</li>
		<li>
			{{ Form::label('order', 'Order:') }}
			{{ Form::text('order') }}
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
			{{ Form::label('service_id', 'Service_id:') }}
			{{ Form::text('service_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}