{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('blog_post_id', 'Blog_post_id:') }}
			{{ Form::text('blog_post_id') }}
		</li>
		<li>
			{{ Form::label('status', 'Status:') }}
			{{ Form::text('status') }}
		</li>
		<li>
			{{ Form::label('ip', 'Ip:') }}
			{{ Form::text('ip') }}
		</li>
		<li>
			{{ Form::label('user_agent', 'User_agent:') }}
			{{ Form::text('user_agent') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}