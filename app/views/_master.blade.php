
<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'FloTrain')</title>

    <meta charset='utf-8'>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 
        <link rel="stylesheet" href="{{ URL::asset('styles.css') }}" type="text/css">

    @yield('head')

</head>
<body>


    @if(Session::get('flash_message'))
<div class="alert alert-info"> 
  <button type="button" class="close" data-dismiss="alert">&times;</button>
	{{ Session::get('flash_message') }}
</div>
    @endif



<div class="navbar navbar-wrapper">
  <div class="container mynav">
    <div class="navbar navbar-inverse navbar-static-top">
      
        <div class="navbar-header">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
         <a class="navbar-brand" href="/index.php"> FloTrain </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/index.php/technique">Technicians</a></li>
            <li><a href="/index.php/profile">Edit Your Profile</a></li>
	    @if(Auth::check())
		<li><a href='/index.php/logout'>Log out <strong> {{ Auth::user()->email; }} </strong></a></li>
	    @else 
		<li><a href='/index.php/signup'>Sign up</a></li>
		<li><a href='/index.php/login'>Log in</a></li>
	    @endif
          </ul>
        </div>


    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper -->




@yield('content')

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

@yield('footer')

</body>
</html>
