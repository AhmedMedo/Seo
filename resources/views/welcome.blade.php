<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="@yield('robots')">

    <title>Seo</title>
    <link href="{!!asset('css/bootstrap.min.css')!!}" rel="stylesheet">
        <link href="{!!asset('css/style.css')!!}" rel="stylesheet">

    <link href="{!!asset('css/font-awesome/css/font-awesome.min.css')!!}" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Header Section -->
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('home')}}">logo</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
              
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="#">Tutorials</a></li>
            <li><a href="#">Blog</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li><button type="button" class="btn btn-default">Sign in</button></li>
            <li><button type="button" class="btn btn-success">Sign up</button></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Header -->

    <!-- statrt of content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <!-- Show Contents -->
          <div class="col-lg-8 col-md-8">
              @yield('content')
          </div>   
            <!-- SideBar -->
          <div class="col-lg-4 col-md-4">
               <!-- Search area --> 
            <div class="box">
               <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
            </div>
            <!-- Recent posts -->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Recent posts</h3>
                    </div>
                    <div class="panel-body">
                       <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object media-image" src="http://www.gettyimages.ca/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg" alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Media heading</h4>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.
                          
                            </div>
                        </div>

                         <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object media-image" src="http://www.gettyimages.ca/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg" alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Media heading</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                        </div>
                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object media-image" src="http://www.gettyimages.ca/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg" alt="...">
                              </a>
                            </div>
                            <div class="media-body ">
                              <h4 class="media-heading">Media heading</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                        </div>
                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object media-image" src="http://www.gettyimages.ca/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg" alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Media heading</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.
                             </div>
                              <div class="pull-right"> by Medo</div>
                        </div>
                    </div>
                  </div>             

             <!-- Top Posts -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Top posts</h3>
                    </div>
                    <div class="panel-body">
                       <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object media-image" src="http://www.gettyimages.ca/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg" alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Media heading</h4>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.
                          
                            </div>
                        </div>

                         <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object media-image" src="http://www.gettyimages.ca/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg" alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Media heading</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                        </div>
                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object media-image" src="http://www.gettyimages.ca/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg" alt="...">
                              </a>
                            </div>
                            <div class="media-body ">
                              <h4 class="media-heading">Media heading</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                        </div>
                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object media-image" src="http://www.gettyimages.ca/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg" alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Media heading</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.
                             </div>
                              <div class="pull-right"> by Medo</div>
                        </div>
                    </div>
                  </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="footer-box">
        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <h2>About us</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
              <div class="col-lg-4 col-md-6">
              <h2>Links</h2>
              <ul class="list-unstyled">
                <li><a href=""> Blog</a></li>
                <li><a href="">Courses</a></li>
                <li><a href="">contact us</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Terms of use</a></li>
              </ul>
              <ul class="list-unstyled social-list">
                            <li><a href="#"><img src="{!!asset('images/social-bookmarks/facebook.png')!!}" width="48" height="48" alt="Facebook" /></a></li>
                            <li><a href="#"><img src="{!!asset('images/social-bookmarks/gplus.png')!!}" width="48" height="48" alt="Google Plus" /></a></li>
                            <li><a href="#"><img src="{!!asset('images/social-bookmarks/twitter.png')!!}" width="48" height="48" alt="Twitter" /></a></li>
                          </ul>
                
              </div>
              <div class="col-lg-4">S</div>


            </div>
        </div>
      </div>
      

    </footer>


    <script src="{!! asset('js/jquery-1.11.3.min.js')!!}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{!! asset('js/bootstrap.min.js')!!}"></script>  </body>
</html>