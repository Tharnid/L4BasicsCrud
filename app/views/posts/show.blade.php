@extends('layouts.master')

@section('content')

<h1>Show Post</h1>

{{ link_to_route('posts.index', 'Return to all posts') }}

<table class="table table-striped table-bordered table-hover">
	
	<thead>
		<tr>Author</tr>
		<tr>Title</tr>
		<tr>Body</tr>
	</thead>

	<tbody>
		<tr>
			
				<td>{{ $post->author }}</td>
				<td>{{ $post->title }}</td>
				<td>{{ $post->body }}</td>
				<td>{{ link_to_route('posts.show', 'Show', array($post->id), array('class' => 'btn btn-primary')) }}</td>
				<td>{{ link_to_route('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route'  => array('posts.destroy', $post->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>

		</tr>	
	</tbody>

</table>

@stop