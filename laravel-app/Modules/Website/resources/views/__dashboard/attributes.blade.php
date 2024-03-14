{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('key', 'Key:') }}
			{{ Form::text('key') }}
		</li>
		<li>
			{{ Form::label('code', 'Code:') }}
			{{ Form::text('code') }}
		</li>
		<li>
			{{ Form::label('value', 'Value:') }}
			{{ Form::text('value') }}
		</li>
		<li>
			{{ Form::label('extra_fee', 'Extra_fee:') }}
			{{ Form::text('extra_fee') }}
		</li>
		<li>
			{{ Form::label('attribute_category_id', 'Attribute_category_id:') }}
			{{ Form::text('attribute_category_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}