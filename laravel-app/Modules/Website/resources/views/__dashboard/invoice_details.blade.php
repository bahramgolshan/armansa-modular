{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('invoice_id', 'Invoice_id:') }}
			{{ Form::text('invoice_id') }}
		</li>
		<li>
			{{ Form::label('service_detail_id', 'Service_detail_id:') }}
			{{ Form::text('service_detail_id') }}
		</li>
		<li>
			{{ Form::label('quantity', 'Quantity:') }}
			{{ Form::text('quantity') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}