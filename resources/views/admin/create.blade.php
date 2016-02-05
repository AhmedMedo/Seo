@extends('admin.main')
@section('title')
New Post
@stop
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!!Form::open(array('url'=>'/seodashboard/posts', 'files' => true)) !!}
 <div class="form-group">
 <div class="row">
    <label for="exampleInputEmail1" class="col-sm-1">Title</label>
    <div class="col-sm-4">
    {!!Form::text('title',null,['class'=>'form-control','placeholder'=>'add your post title here']) !!}
    </div>
    <label class="col-sm-1 col-sm-offset-2">status</label>
    <div class="col-sm-3">

    {!!Form::select('status',array('1'=>'published','0'=>'draft'),null,['class'=>'form-control'])!!}
    </div>
    </div>
  </div>
  <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
          {!!Form::label('Meta description')!!}
        </div>
        <div class="col-sm-4">
          {!!Form::textarea('excrypt',null,['id'=>'excrypt','class'=>'form-control','required'=>'required','placeholder'=>'max character is 155'])!!}
        </div>
     </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
    Number of characters
    </div>
    <div class="col-sm-1">
      <div id="counter"></div>
    </div>
  </div>
  
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
       {!!Form::select('tags[]',$tags,null,['id'=>'tags','class'=>'form-control','multiple'])!!}
      </div>
    <div class="col-sm-1">
       {!!Form::label('Category')!!}
</div><div class="col-sm-4">
            {!!Form::select('categories[]',$category,null,['id'=>'category','class'=>'form-control','multiple'])!!}
      </div>
  </div>
</div>
 <div class="form-group">
    <label for="exampleInputFile">Post Image</label>
    <input type="file" id="exampleInputFile" name="image">
 </div>

  {!!Form::submit('Create',array('class'=>'btn btn-success form-control'))!!}

{!! Form::close()!!}
 
{!!Form::close() !!}


@stop
