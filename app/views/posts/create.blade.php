@extends('layouts.master')

@section('content')

<h1>Create Post</h1>
<br />

			{{ Form::open(array('route' => 'posts.store')) }}
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
					{{ Form::submit('Add Post!!!', array('class' => 'btn-info')) }}
				</li>
			</ul>
			{{ Form::close() }}
		
		<div class="span4 well">
			@if($errors->any())
				<ul>
					{{ implode('', $errors->all('<li class="error">:message</li>'))}}
				</ul>
			@endif
		</div>

@stop