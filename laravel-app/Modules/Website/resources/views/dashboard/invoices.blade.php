{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('user_id', 'User_id:') }}
			{{ Form::text('user_id') }}
		</li>
		<li>
			{{ Form::label('status', 'Status:') }}
			{{ Form::text('status') }}
		</li>
		<li>
			{{ Form::label('additional_discount', 'Additional_discount:') }}
			{{ Form::text('additional_discount') }}
		</li>
		<li>
			{{ Form::label('additional_price', 'Additional_price:') }}
			{{ Form::text('additional_price') }}
		</li>
		<li>
			{{ Form::label('tax', 'Tax:') }}
			{{ Form::text('tax') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}