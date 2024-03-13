{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('invoice_id', 'Invoice_id:') }}
			{{ Form::text('invoice_id') }}
		</li>
		<li>
			{{ Form::label('status', 'Status:') }}
			{{ Form::text('status') }}
		</li>
		<li>
			{{ Form::label('amount', 'Amount:') }}
			{{ Form::text('amount') }}
		</li>
		<li>
			{{ Form::label('reterival_ref_no', 'Reterival_ref_no:') }}
			{{ Form::text('reterival_ref_no') }}
		</li>
		<li>
			{{ Form::label('system_trace_no', 'System_trace_no:') }}
			{{ Form::text('system_trace_no') }}
		</li>
		<li>
			{{ Form::label('transaction_date', 'Transaction_date:') }}
			{{ Form::text('transaction_date') }}
		</li>
		<li>
			{{ Form::label('transaction_result', 'Transaction_result:') }}
			{{ Form::text('transaction_result') }}
		</li>
		<li>
			{{ Form::label('verification_result', 'Verification_result:') }}
			{{ Form::text('verification_result') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}