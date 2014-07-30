
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

<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
      
        <div class="navbar-header">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="/">FloTrain</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="http://www.bootply.com" target="ext">About</a></li>
            <li><a href="/index.php/profile">Profile</a></li>
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
