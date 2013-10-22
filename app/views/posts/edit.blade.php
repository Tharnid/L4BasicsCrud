@extends('layouts.master')

@section('content')

<h1>Edit Post</h1>

{{ Form::model($post, array('method' => 'PATCH', 'route', => array('posts.update', $post->id))) }}
<ul>
	<li>
		{{ Form::label('author', 'Author:') }}
		{{ Form::text('author', '', array('placeholder' => 'Author')) }}
	</li>
	<br />
	<li>
		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title', '', array('placeholder' => 'Title')) }}
	</li>
	<br />
	<li>
		{{ Form::label('body', 'Body:') }}
		{{ Form::textarea('body', '', array('placeholder' => 'Body')) }}
	</li>
	<br />
	<li>
		{{ Form::submit('Save Post', array('class' => 'btn-info')) }}
		{{ link_to_route('posts.show', 'Cancel', $post->id, array('class' => 'btn btn-warning'))}}
	</li>
</ul>
{{ Form::close() }}

			@if($errors->any())
				<ul>
					{{ implode('', $errors->all('<li class="error">:message</li>'))}}
				</ul>
			@endif

@stop