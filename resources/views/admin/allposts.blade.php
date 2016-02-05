@extends('admin.main')
@section('title')
All posts
@stop
@section('content')
<table class="table table-hover">
	<thead>
		<th>Title</th>
		<th>author</th>
		<th>views</th>
		<th>status</th>
		<th>Seo title</th>
		<th>Seo description</th>
		<th>Seo keywords</th>
		<th>Edit</th>
		<th>Delete</th>
	</thead>
	<tbody>
	@foreach($posts as $post)
	<tr>
		<?php $title=urlencode($post->title); ?>
		<td><a href="{{action('PostController@show',[$title])}}">{{$post->title}}</a></td>
		<td>Lorem ipsum</td>
		<td>0</td>
		<td>@if($post->published)
			{{"published"}}
			@else
			{{"Draft"}}

			@endif

		</td>
		<td>{{$post->title}}</td>
		<td>{{$post->excrypt}}</td>
		<td>
			<ul>
			@foreach($post->tags as $tag)
			
				<li>{{$tag->tag}}</li>
			
			@endforeach
			</ul>
		</td>
		<td><a href="{{route('seodashboard.posts.edit', $post->id) }}" class="btn btn-success">Edit</a></td>
		<td>
				{!! Form::open(['method'=>'DELETE','route'=>['seodashboard.posts.destroy',$post->id]]) !!}
				{!! Form::submit('Delete',['class'=>'btn btn-danger'])!!}
				{!! Form::close() !!}
			</td>
	</tr>

	@endforeach
		
	</tbody>
</table>

@stop
