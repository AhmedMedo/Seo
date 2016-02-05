@extends('admin.main')
@section('title')
edit
@stop
@section('content')
{!!Form::model($post,['method'=>'PATCH','action'=>['PostController@update',$post->id], 'files' => true])!!}

<div class="form-group">
 <div class="row">
    <label for="exampleInputEmail1" class="col-sm-1">Title</label>
    <div class="col-sm-4">
    {!!Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <label class="col-sm-1 col-sm-offset-2">status</label>
    <div class="col-sm-3">

    {!!Form::select('status',array('1'=>'published','0'=>'draft'),$post->published,['class'=>'form-control'])!!}
    </div>
    </div>
  </div>
  <div class="form-group">
    {!!Form::label('Meta description')!!}

    {!!Form::textarea('excrypt',null,['id'=>'excrypt','class'=>'form-control','required'=>'required'])!!}

  </div>
  <div id="counter"></div>
  <div class="form-group">
      {!!Form::label('post body')!!}

    {!!Form::textarea('content',null,['id'=>'editor','class'=>'form-control','required'=>'required'])!!}

  </div>
  <div class="form-group">
  <div class="row">
      <div class="col-sm-1">
       {!!Form::label('Keywords')!!}
</div>

      <div class="col-sm-4">
       {!!Form::select('tags[]',$tags,$post->getTagListAttribute(),['id'=>'tags','class'=>'form-control','multiple'])!!}
      </div>
    <div class="col-sm-1">
       {!!Form::label('Category')!!}
</div><div class="col-sm-4">
            {!!Form::select('categories[]',$category,$post->getCategoryListAttribute(),['id'=>'category','class'=>'form-control','multiple'])!!}
      </div>
  </div>
</div>
 <div class="form-group">
    <label for="exampleInputFile">Post Image</label>
    <input type="file" id="exampleInputFile" name="image">
 </div>

  {!!Form::submit('Update',array('class'=>'btn btn-success form-control'))!!}

{!! Form::close()!!}

 
{!!Form::close() !!}


@stop
