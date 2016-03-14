<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="@yield('metatitle')">
    <meta name="description" content="@yield('metadesc')">
    <meta name="keywords" content="@yield('keywords')">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{!!asset('css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/adminstyle.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/font-awesome/css/font-awesome.min.css')!!}" rel="stylesheet">

      <link href="{!! asset('select2/css/select2.min.css') !!}" rel="stylesheet" />
      <script src="{!! asset('js/jquery-1.11.3.min.js')!!}"></script>

      <script src="{!! asset('select2/js/select2.min.js') !!}"></script>
       </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{!!route('dashboard') !!}"><i class="fa fa-tachometer fa-2x fa-fw"></i>
Seo Dashboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

           <ul class="nav navbar-nav navbar-right">
           <li><a href="{{route('home')}}"><i class="fa fa-globe fa-lg fa-fw"></i>
Visit site</a></li>
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell fa-lg fa-fw"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"> Not 1</a></li>
            <li><a href="#"> Not 2</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user fa-lg fa-fw"></i>{{Auth::user()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"> <i class="fa fa-pencil fa-lg fa-fw"></i>edit</a></li>
            <li><a href="{{route('logout')}}"> <i class="fa fa-sign-out fa-lg fa-fw"></i>logout</a></li>
          </ul>
        </li>
      </ul>
        </div>
      </div>
    </nav>
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="{!!route('dashboard') !!}"><i class="fa fa-tachometer"></i>
Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-sort-desc fa-2x"></i> &nbsp;Posts</a></li>
            <ul id="demo" class="collapse" style="list-style-type: none;">
            <li><a href="{{route('seodashboard.posts.index')}}"><i class="fa fa-folder-open fa-lg fa-lw"></i>
All posts</a></li>
            <li><a href="{!!route('seodashboard.posts.create')!!}"> <i class="fa fa-plus fa-lg fa-lw"></i>
New Post</a></li>
            </ul>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="{!! route('seodashboard.categories.index')!!}"><i class="fa fa-bars fa-lg fa-fw"></i>Categories</a></li>
            <li><a href="{!!route('comment') !!}"> <i class="fa fa-comment-o fa-lg fa-fw"></i>
Comments</a></li>
            <li><a href="#"> <i class="fa fa-users fa-lg fa-fw"></i>
Users</a></li>
            <li><a href="#"> <i class="fa fa-user fa-lg fa-fw"></i>
Profile</a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        @yield('content')



        </div>
      </div>
    </div>
  <script type="text/javascript">

      $("#tags").select2({
          tags: true,
          tokenSeparators: [',', ' ']

      });
      $("#category").select2({
          tags: true,
          tokenSeparators: [',', ' ']

      });
  </script>
<script src="{!!asset('js/ckeditor/ckeditor.js') !!}"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


    <script src="{!! asset('js/jquery-1.11.3.min.js')!!}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{!! asset('js/bootstrap.min.js')!!}"></script>
  <script src="{!! asset('js/plugin.js')!!}"></script>
  </body>
</html>
