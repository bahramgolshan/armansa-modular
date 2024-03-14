{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('question', 'Question:') }}
			{{ Form::textarea('question') }}
		</li>
		<li>
			{{ Form::label('answer', 'Answer:') }}
			{{ Form::textarea('answer') }}
		</li>
		<li>
			{{ Form::label('order', 'Order:') }}
			{{ Form::text('order') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}