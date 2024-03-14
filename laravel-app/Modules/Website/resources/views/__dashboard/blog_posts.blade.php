{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title') }}
		</li>
		<li>
			{{ Form::label('content', 'Content:') }}
			{{ Form::textarea('content') }}
		</li>
		<li>
			{{ Form::label('meta_keyword', 'Meta_keyword:') }}
			{{ Form::text('meta_keyword') }}
		</li>
		<li>
			{{ Form::label('meta_description', 'Meta_description:') }}
			{{ Form::text('meta_description') }}
		</li>
		<li>
			{{ Form::label('blog_category_id', 'Blog_category_id:') }}
			{{ Form::text('blog_category_id') }}
		</li>
		<li>
			{{ Form::label('created_by', 'Created_by:') }}
			{{ Form::text('created_by') }}
		</li>
		<li>
			{{ Form::label('summary', 'Summary:') }}
			{{ Form::text('summary') }}
		</li>
		<li>
			{{ Form::label('updated_by', 'Updated_by:') }}
			{{ Form::text('updated_by') }}
		</li>
		<li>
			{{ Form::label('blog_category_id', 'Blog_category_id:') }}
			{{ Form::text('blog_category_id') }}
		</li>
		<li>
			{{ Form::label('media_id', 'Media_id:') }}
			{{ Form::text('media_id') }}
		</li>
		<li>
			{{ Form::label('slug', 'Slug:') }}
			{{ Form::text('slug') }}
		</li>
		<li>
			{{ Form::label('status', 'Status:') }}
			{{ Form::text('status') }}
		</li>
		<li>
			{{ Form::label('allow_comments', 'Allow_comments:') }}
			{{ Form::text('allow_comments') }}
		</li>
		<li>
			{{ Form::label('is_featured', 'Is_featured:') }}
			{{ Form::text('is_featured') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}