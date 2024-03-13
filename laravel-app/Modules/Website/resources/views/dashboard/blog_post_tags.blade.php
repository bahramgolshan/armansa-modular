{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('blog_post_id', 'Blog_post_id:') }}
			{{ Form::text('blog_post_id') }}
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