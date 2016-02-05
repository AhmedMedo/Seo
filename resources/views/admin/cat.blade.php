@extends('admin.main')
@section('title')
categories
@stop
@section('content')
{!!Form::open(array('url'=>'seodashboard/categories')) !!}
	<div class="form-group">
		<div class="row">
			<div class="col-sm-1">
			{!!Form::label('category') !!}
			</div>
			<div class="col-sm-4">
			{!!Form::text('cat',null,['class'=>'form-control']) !!}
			</div>

		</div>
</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-1">
			{!!Form::label('Description') !!}
			</div>

			<div class="col-sm-5">
				{!!Form::textarea('description',null,['class'=>'form-control']) !!}
			</div>
		</div>
</div>

<div class="form-group">
	<div class="row">
	<div class="col-sm-2">
	{!!Form::label('parent') !!}
	</div>
	<div class="col-sm-3">
	<select name="category_parent" class="form-control">
		<option value="0">None</option>
		@foreach($categories as $category)
			<option value="{{$category->id}}">{{$category->category}}</option>

		@endforeach
	</select>
	</div>
	</div>
</div>
			<div class="col-sm-offset-2 col-sm-3">
			{!!Form::submit('Add',array('class'=>'btn btn-success form-control'))!!}
			</div>


{!! Form::close()!!}

<table class="table table-hover">
	<thead>
		<th>category</th>
		<th>Edit</th>
		<th>Delete</th>
	</thead>
	<tbody>
	@foreach($categories as $category)
	<tr>
		<td>{{$category->category}}</td>
		<td><a href="{{route('seodashboard.categories.edit',$category->id) }}" class="btn btn-success">Edit</a></td>
		<td>
				{!! Form::open(['method'=>'DELETE','route'=>['seodashboard.categories.destroy',$category->id]]) !!}
				{!! Form::submit('Delete',['class'=>'btn btn-danger'])!!}
				{!! Form::close() !!}
			</td>
	</tr>

	@endforeach

	</tbody>
@stop
