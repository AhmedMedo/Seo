@extends('admin.main')
@section('title')
edit categories
@stop
@section('content')
{!! Form::model($category,['method'=>'PATCH','action'=>['CategoryController@update',$category->id]])!!}
<div class="form-group">
		<div class="row">
			<div class="col-sm-1">
			{!!Form::label('category') !!}
			</div>
			<div class="col-sm-4"> 
			{!!Form::text('cat',$category->category,['class'=>'form-control']) !!}
			</div>

		</div>
</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-1">
			{!!Form::label('Description') !!}
			</div>

			<div class="col-sm-5">
				{!!Form::textarea('description',$category->description,['class'=>'form-control']) !!}
			</div>
		</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-2">
		{!!Form::label('parent') !!}
		</div>
		<div class="col-sm-3">
		{!!Form::select('category_parent',$category_list,$category->parent_id,['class'=>'form-control']) !!}
		</div>
	</div>
</div>
			<div class="col-sm-offset-2 col-sm-3"> 
			{!!Form::submit('update',array('class'=>'btn btn-success form-control'))!!}
			</div>


{!! Form::close()!!}
@stop