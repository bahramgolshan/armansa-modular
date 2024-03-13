{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('service_id', 'Service_id:') }}
			{{ Form::text('service_id') }}
		</li>
		<li>
			{{ Form::label('size_id', 'Size_id:') }}
			{{ Form::text('size_id') }}
		</li>
		<li>
			{{ Form::label('color_id', 'Color_id:') }}
			{{ Form::text('color_id') }}
		</li>
		<li>
			{{ Form::label('paper_id', 'Paper_id:') }}
			{{ Form::text('paper_id') }}
		</li>
		<li>
			{{ Form::label('binding_id', 'Binding_id:') }}
			{{ Form::text('binding_id') }}
		</li>
		<li>
			{{ Form::label('cellophane_id', 'Cellophane_id:') }}
			{{ Form::text('cellophane_id') }}
		</li>
		<li>
			{{ Form::label('price', 'Price:') }}
			{{ Form::text('price') }}
		</li>
		<li>
			{{ Form::label('preview_media_id', 'Preview_media_id:') }}
			{{ Form::text('preview_media_id') }}
		</li>
		<li>
			{{ Form::label('status', 'Status:') }}
			{{ Form::text('status') }}
		</li>
		<li>
			{{ Form::label('discount', 'Discount:') }}
			{{ Form::text('discount') }}
		</li>
		<li>
			{{ Form::label('discount_type', 'Discount_type:') }}
			{{ Form::text('discount_type') }}
		</li>
		<li>
			{{ Form::label('cover_id', 'Cover_id:') }}
			{{ Form::text('cover_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}