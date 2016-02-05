@extends('admin.main')
@section('title')
{{$post->title}}@stop
@section('metatitle')
{{$post->title}}@stop
@section('metadesc')
{{$post->excrypt}}@stop
@section('keywords')
{{$keyword}}@stop
@section('content')
<h1><img class="img-thumbnail" src="{{asset('images/'.$post->image)}}" height="140px" width="140px" />
{{$post->title}}</h1>
<hr>
{!!  $post->content !!}
@stop